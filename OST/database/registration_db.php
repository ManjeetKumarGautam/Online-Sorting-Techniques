<?php
include('connection.php');
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password === $cpassword) {
        $get_data = "SELECT * FROM `registration` where email = '$email'";
        $check_query = mysqli_query($conn, $get_data);

        if (mysqli_num_rows($check_query) > 0) {
            echo "user all ready exist";
        } else {
            $set_data = "INSERT INTO `registration`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
            $check_query2 = mysqli_query($conn, $set_data);
            if ($check_query2) {
                header('Location: ../account/login.php');
            } else {
                header('Location: ../account/registration.php');
            }
        }
    } else {
        echo "<script>alert('Password and Confirm Password not match')</script>";
        header('Location: ../account/registration.php');
    }


    // if (empty($_POST["name"])) {
    //     $nameErr = "Name is required";
    // } else {
    //     $name = test_input($_POST["name"]);
    //     // check if name only contains letters and whitespace
    //     if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    //         $nameErr = "Only letters and white space allowed";
    //     }
    // }
    // function test_input($data)
    // {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }

}
