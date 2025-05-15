<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zetunet</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php
    session_start();
    require_once 'config/database.php';
    require_once 'includes/functions.php';

    // Check if user is logged in
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }

    // Get user role and redirect accordingly
    $user_role = $_SESSION['user_role'];
    switch ($user_role) {
        case 'superadmin':
            header('Location: superadmin/dashboard.php');
            break;
        case 'isp':
            header('Location: isp/dashboard.php');
            break;
        default:
            header('Location: login.php');
    }
    ?>
</body>
</html> 