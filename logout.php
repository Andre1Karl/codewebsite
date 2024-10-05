<?php
session_start();

// Check if the "logout" query parameter is present
if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    // Create a logout message
    $username = isset($_SESSION['_username']) ? $_SESSION['_username'] : '';
    $logoutMessage = "You have been logged out, " . $username;

    // Store the logout message in a session variable
    $_SESSION['logoutMessage'] = $logoutMessage;

    // Unset and destroy the session
    session_unset();
    session_destroy();

    // Redirect to userStartPage.php
    header("Location: userStartPage.php?logout=true");
    exit();
} else {
    // If the user directly accesses logout.php without logging out, redirect to the login page
    header("Location: userLogIn.php");
    exit();
}
?>
