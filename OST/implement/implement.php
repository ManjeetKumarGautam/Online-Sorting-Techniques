<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../images/logo.png" type="image/png" sizes="30x20">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="implement-style.css">
    <title>Document</title>

    <style>
        .wrapper .form .inputfield .input:focus,
        .wrapper .form .inputfield .textarea:focus,
        .wrapper .form .inputfield .custom_select select:focus {
            border: 1px solid #3191ff;
        }
    </style>
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

    <form action="../sorting/sortings.php" method="post">
        <div class="wrapper">
            <div class="title">
                Implement Sorting Techniques
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>How Many Numbers are You Enter ?</label>
                    <input type="text" name="range" class="input" placeholder="" required>
                </div>
                <div class="inputfield">
                    <label>Enter the Numbers</label>
                    <textarea class="textarea" name="numbers" placeholder="Enter numbers with space (Ex. 12 33 44)" required></textarea>
                </div>

                <div class="inputfield">
                    <label>Choose the Sorting Techniques</label>
                    <div class="custom_select">
                        <select name="sorting" id="" required>
                            <option value="bubble_sort">Bubble Sort</option>
                            <option value="insertion_sort">Insertion Sort</option>
                            <option value="merge_sort">Merge Sort</option>
                            <option value="quick_sort">Quick Sort</option>
                            <option value="selection_sort">Selection Sort</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <input type="submit" name="sub" value="Submit" class="btn">
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