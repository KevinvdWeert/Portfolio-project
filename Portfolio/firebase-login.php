<?php
session_start();
if (isset($_SESSION['firebase_logged_in']) && $_SESSION['firebase_logged_in'] === true) {
    header('Location: ./admin/index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firebase Login</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="login-page">

<main class="main">
    <div class="page-title dark-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Firebase Login</h1>
        </div>
    </div>
    <section class="section d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 100px - 50px); background-image: url('../assets/img/IMG_9296.jpg'); background-size: cover; background-position: center;">
        <div class="card shadow-lg" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <p id="error-message" class="text-danger text-center"></p>
                <form id="firebase-login-form" class="php-email-form">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<footer id="footer" class="footer position-relative dark-background">
    <div class="container">
        <div class="copyright text-center">
            <p>© <strong class="px-1 sitename">Portfolio Firebase</strong> All Rights Reserved</p>
        </div>
    </div>
</footer>

<script type="module">
  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.7.1/firebase-app.js";
  import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/11.7.1/firebase-auth.js";

  const firebaseConfig = {
    apiKey: "AIzaSyCGewLNch5oCyg2SxXVjzYhc4szEn0Yo7o",
    authDomain: "portfolio-kevinvdweert.firebaseapp.com",
    projectId: "portfolio-kevinvdweert",
    storageBucket: "portfolio-kevinvdweert.firebasestorage.app",
    messagingSenderId: "691079417801",
    appId: "1:691079417801:web:c312e421dfa621fd562218",
    measurementId: "G-BMH2921S3T"
  };

  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);

  document.getElementById("firebase-login-form").addEventListener("submit", async (e) => {
    e.preventDefault();

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const errorMessage = document.getElementById("error-message");

    try {
      await signInWithEmailAndPassword(auth, email, password);
      alert("Login successful!");
      window.location.href = "./admin/index.php"; // Redirect to dashboard
    } catch (error) {
      errorMessage.textContent = error.message;
    }
  });
</script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
