<!DOCTYPE html>
<html lang="en">
<?php
include('../database/connection.php');
session_start();
$algo = $_SESSION['algo'];
$get_algo = "SELECT * FROM `sortings` ";
$query = mysqli_query($conn, $get_algo);
$data = mysqli_fetch_assoc($query);
$algo = $_SESSION['algo'];

?>

<head>
    <link rel="icon" href="../images/logo.png" type="image/png" sizes="30x20">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="implement-style.css">
    <title>Document</title>

</head>

<body>
    <div class="header">
        <div class="logo">
            <h1>O.S.T.</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="../account/login-home.php">HOME</a></li>
                <li><a href="../about/about2.php">ABOUT</a></li>
                <li><a href="../learn/learning_home.php">Tutorial</a></li>
                <li><a href="../implement/implement.php">Implementation</a></li>
                <li><a href="../account/logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>

    <form action="../implement/explanation.php" method="post">
        <div class="wrapper">
            <div class="title">
                Result
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>How Many Numbers ?</label>
                    <input type="text" name="" class="input" value="<?php echo $_SESSION['range']; ?>" readonly>
                </div>
                <div class="inputfield">
                    <label>Your Numbers Entered</label>
                    <textarea class="textarea" name="address" readonly> <?php echo $_SESSION['num']; ?></textarea>
                </div>

                <div class="inputfield">
                    <label>Sorting Techniques have you chose</label>
                    <input type="text" name="" class="input" value="<?php echo $_SESSION['sort']; ?>" readonly>
                </div>
                <div class="inputfield">
                    <label>Algorithm of Sorting</label>
                    <textarea class="textarea" name="" readonly><?php echo $data[$algo]; ?></textarea>
                </div>
                <div class="inputfield">
                    <label>Sorted Number</label>
                    <textarea class="textarea" name="" readonly><?php echo $_SESSION['result']; ?></textarea>
                </div>
                <div class="inputfield">
                    <input type="submit" name="sub" value="View Explanation" class="btn">
                </div>
            </div>
        </div>
    </form>
    <div class="footer">
        <div class="bg-img">
            <a href=""><i class="fa fa-facebook" style="font-size:30px;color:#0f76b5;margin-left: 10vh;"></i></a>
            <a href=""><i class="fa fa-instagram" style="font-size:30px;color:#0f76b5;margin-left: 10vh;"></i></a>
            <a href=""><i class="fa fa-telegram" style="font-size:30px;color:#0f76b5;margin-left: 10vh;"></i></a>
            <a href=""><i class="fa fa-twitter" style="font-size:30px;color:#0f76b5;margin-left: 10vh;"></i></a>
            <br>
            <a href=""><i class="fa fa-phone" style="font-size:25px;color:#040a0f;margin-left:55%;">+91 9506032564</i>

            </a>
            <a href=""><i class="fa fa-envelope" style="font-size:25px;color:#040a0f;margin-left:2%;"> ost@gmail.com</i></a>
            <center>
                <p style=" margin-top: 5vh; color: #040a0f;"><b>Copyright &#169 All Rights Received</b></p>
            </center>
        </div>
    </div>
</body>

</html>