<?php
ob_start(); // Start output buffering
session_start(); // Start a new session

$_SESSION['loggedin'] = false; // Set loggedin status to false

$_SESSION['username'] = ''; // Initialize username session variable to an empty string
$_SESSION['email'] = ''; // Initialize email session variable to an empty string

// Redirect to index.php using JavaScript
echo '<script>window.location.href="index.php";</script>';

ob_end_flush(); // End output buffering and send the output to the browser
?>