<?php
session_start();

// Log the logout activity if user was logged in
if (isset($_SESSION['user_id'])) {
    require_once 'config/database.php';
    require_once 'includes/functions.php';
    logActivity($_SESSION['user_id'], 'User logged out');
}

// Destroy the session
session_destroy();

// Redirect to login page
header('Location: login.php');
exit(); 