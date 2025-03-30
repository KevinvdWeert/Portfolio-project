<?php
session_start();

// Hardcoded admin credentials (in a real application, use a database)
$admin_username = "admin";
$admin_password = password_hash("admin123", PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (!empty($username) && !empty($password)) {
        if ($username === $admin_username && password_verify($password, $admin_password)) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;
            header('Location: admin.html'); // Redirect to admin page
            exit;
        } else {
            header('Location: login.html?error=1'); // Redirect back to login page with error
            exit;
        }
    } else {
        header('Location: login.html'); // Redirect back to login page without error
        exit;
    }
} else {
    header('Location: login.html');
    exit;
}
?>