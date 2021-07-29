<?php
include('../database/connection.php');
session_start();
if (isset($_POST['sub'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password === $cpassword) {

        $update_data = "Update registration Set password='$password' where email='$email'";
        $result = mysqli_query($conn, $update_data);

        if ($result) {
            echo "Password Change Successfully";
            header('Location:../account/login-home.php');
        } else {
            echo "Not Password Change";
        }
    } else {
        echo "Your password and confirm password not match";
    }
}
