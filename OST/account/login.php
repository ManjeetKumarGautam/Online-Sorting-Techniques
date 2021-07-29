<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../images/logo.png" type="image/png" sizes="30x20">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login-style.css">
    <title>Online Sorting Techniques</title>
</head>

<body>


    <div class="header">
        <div class="logo">
            <h1>O.S.T.</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="../home.php">HOME</a></li>
                <li><a href="../about/about.php">ABOUT</a></li>
                <li><a href="../account/login.php">Tutorial</a></li>
                <li><a href="../account/login.php">Implementation</a></li>
                <li><a href="../account/login.php">LOGIN</a></li>
            </ul>
        </div>
    </div>
    <center>
        <div class="login-box">
            <h1>LOGIN</h1>
            <form action="../database/login_db.php" method="post">
                <div class="text">
                    <input type="text" name="email" id="" placeholder="Enter E-mail" required><br>
                    <input type="password" name="password" id="" placeholder="Enter password" required>
                    <a href="../account/forget-pass.php" class="forget">Forget Password</a>
                </div>
                <input class="btn" type="submit" value="Login" name="login">
                <p>Create new Account :- <a href="../account/registration.php">Click Here</a></p>
            </form>
        </div>
    </center>
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