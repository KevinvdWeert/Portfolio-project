<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Edit Content - Admin Panel</title>
  <!-- Include your CSS files -->
</head>
<body class="admin-page">
  <!-- Similar header as admin.html -->
  
  <main class="main">
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Edit Content</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="admin.html">Admin</a></li>
            <li class="current">Edit Content</li>
          </ol>
        </nav>
      </div>
    </div>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3>Edit Homepage Content</h3>
              </div>
              <div class="card-body">
                <form action="update-content.php" method="post">
                  <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                  <div class="mb-3">
                    <label for="hero-title" class="form-label">Hero Title</label>
                    <input type="text" class="form-control" id="hero-title" name="hero-title" value="Kevin Van de Weert">
                  </div>
                  <div class="mb-3">
                    <label for="hero-subtitle" class="form-label">Hero Subtitle</label>
                    <input type="text" class="form-control" id="hero-subtitle" name="hero-subtitle" value="I'm a Kitchen Assistant, Web Developer, Garde-Manger Chef, UI/UX designer">
                  </div>
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  <!-- Include your footer and scripts -->
</body>
</html>