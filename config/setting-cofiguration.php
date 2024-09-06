<?php
session_start();

// Enable error reporting for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if a CSRF token is already set in the session
if (empty($_SESSION['csrf_token'])) {
    // Generate a new CSRF token if not set
    $csrf_token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $csrf_token; // Store it in the session
} else {
    // Use the existing CSRF token from the session
    $csrf_token = $_SESSION['csrf_token'];
}

// Output the CSRF token for debugging purposes (optional)
// echo 'CSRF Token: ' . htmlspecialchars($csrf_token);
?>
