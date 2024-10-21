<?php
session_start();

$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'config.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Check if the username or email or phone number already exists
    $query = "SELECT * FROM `userinfo` WHERE username='$username' OR email='$email' OR phone='$phone'";
    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        $showError = "Username, email, or phone number already exists";
    } else {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO `userinfo` (username, email, phone, password) VALUES ('$username', '$email', '$phone', '$hash')";
            $result = mysqli_query($con, $query);

            if ($result) {
                $showAlert = true;
            } else {
                $showError = "Failed to register. Please try again later.";
            }
        } else {
            $showError = "Passwords do not match";
        }
    }

    mysqli_close($con);
}

if ($showAlert) {
    header("Location: index.php?signupsuccess=true");
    exit();
} else {
    header("Location: signup.php?signupsuccess=false&error=$showError");
    exit();
}
?>
