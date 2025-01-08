<?php
  // Start the session before any output is sent to the browser
  session_start();

  // Include the configuration file
  include 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iJeca</title>
    <!-- Link to Bootstrap CSS file hosted on a CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- Link to custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <!-- Favicon -->
    <link rel="icon" href="/ijeca/assets/images/c_programming.svg" type="image/x-icon">
  </head>
  <body style="background: linear-gradient(145deg, #f3e8ff, #d6b4fc); color: #4b0082;">
    <?php 
      // Include menu file to display navigation menu
      include 'menu.php';
    ?>

    <!-- HTML content goes here -->