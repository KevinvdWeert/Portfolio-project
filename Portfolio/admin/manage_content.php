<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Content</title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body class="admin-page">

<header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>
    <div class="profile-img">
        <img src="../assets/img/Alt images/IMG_8613.jpg" alt="Admin" class="img-fluid rounded-circle">
    </div>
    <a href="../index.php" class="logo d-flex align-items-center justify-content-center">
        <h1 class="sitename">Admin Panel</h1>
    </a>
    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="./index.php"><i class="bi bi-house navicon"></i>Home</a></li>
            <li><a href="manage_users.php"><i class="bi bi-people navicon"></i> Manage Users</a></li>
            <li><a href="manage_content.php" class="active"><i class="bi bi-file-earmark-text navicon"></i> Manage Content</a></li>
            <li><a href="settings.php"><i class="bi bi-gear navicon"></i> Settings</a></li>
            <li><a href="logout.php"><i class="bi bi-box-arrow-right navicon"></i> Logout</a></li>
        </ul>
    </nav>
</header>

<main class="main">
    <div class="page-title dark-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Manage Content</h1>
        </div>
    </div>
    <section class="container section">
        <h1 class="text-center">Content Management Section</h1>
        <p class="text-center">This is where you can manage your website's content.</p>
    </section>
</main>

<footer id="footer" class="footer position-relative light-background">
    <div class="container">
        <div class="copyright text-center">
            <p>© <strong class="px-1 sitename">Portfolio Admin</strong> All Rights Reserved</p>
        </div>
    </div>
</footer>

<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/admin.js"></script>
</body>
</html>
