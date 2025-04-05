<?php
session_start();
if (isset($_SESSION['firebase_logged_in']) && $_SESSION['firebase_logged_in'] === true) {
    header('Location: dashboard.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Firebase authentication logic here
    $is_authenticated = false; // Replace with actual Firebase authentication result

    if ($is_authenticated) {
        $_SESSION['firebase_logged_in'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Invalid credentials!";
    }
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
                <?php if (isset($error)) echo "<p class='text-danger text-center'>$error</p>"; ?>
                <form method="POST" action="" class="php-email-form">
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

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/firebase.js"></script>
</body>
</html>
