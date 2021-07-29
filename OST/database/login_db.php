<?php
include('connection.php');
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $get_data = "Select * from registration";
    $result = mysqli_query($conn, $get_data);
    if (mysqli_num_rows($result)) {
        $un = mysqli_fetch_assoc($result);
        if ($un['email'] === $email) {
            if ($un['password'] === $password) {
                echo '<script>';
                echo 'alert("Success") ';
                echo '</script>';
                header("Location:../account/login-home.php");
            } else {
                echo "Wrong password";
            }
        } else {
            echo "Wrong User";
        }
    }
}
