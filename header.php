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
    <!-- Link to custom CSS file -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php 
      // Include menu file to display navigation menu
      include 'menu.php';
    ?>

    <!-- HTML content goes here -->