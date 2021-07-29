<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../images/logo.png" type="image/png" sizes="30x20">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="learn-style.css">
    <title>Online Sorting Techniques</title>
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

    <section class="topic">
        <div class="topic-list">
            <center>
                <div class="topic-heading">
                    <h1 style="color: #040a0f;">Learn</h1>
                    <h3 style="color: #2876cf; font-size: 20px;">Sorting Algorithms</h3>
                </div>
            </center>
            <ul>
                <a href="../learn/learning_home.php">
                    <li class="see">Sorting</li>
                </a>
                <a href="../learn/bubble-sort.php">
                    <li>Bubble Sort</li>
                </a>
                <a href="../learn/insertion-sort.php">
                    <li>Insertion Sort</li>
                </a>
                <a href="../learn/merge-sort.php">
                    <li>Merge Sort</li>
                </a>
                <a href="../learn/quick-sort.php">
                    <li>Quick Sort</li>
                </a>
                <a href="../learn/selection-sort.php">
                    <li>Selection Sort</li>
                </a>
            </ul>
        </div>
        <center>
            <div class="topic-detail">
                <h1>Sorting Algorithms</h1>
                <hr>
                <p>
                    Sorting refers to arranging data in a particular format. Sorting algorithm specifies the way to
                    arrange
                    data in a particular order. Most common orders are in numerical or lexicographical order.
                    <br><br>
                    The importance of sorting lies in the fact that data searching can be optimized to a very high
                    level, if
                    data is stored in a sorted manner. Sorting is also used to represent data in more readable formats.
                    Following are some of the examples of sorting in real-life scenarios −
                    <br><br>
                    Telephone Directory − The telephone directory stores the telephone numbers of people sorted by their
                    names, so that the names can be searched easily.
                    <br><br>
                    Dictionary − The dictionary stores words in an alphabetical order so that searching of any word
                    becomes
                    easy.
                    <br><br>
                    In-place Sorting and Not-in-place Sorting
                    Sorting algorithms may require some extra space for comparison and temporary storage of few data
                    elements. These algorithms do not require any extra space and sorting is said to happen in-place, or
                    for
                    example, within the array itself. This is called in-place sorting. Bubble sort is an example of
                    in-place
                    sorting.
                    <br><br>
                    However, in some sorting algorithms, the program requires space which is more than or equal to the
                    elements being sorted. Sorting which uses equal or more space is called not-in-place sorting.
                    Merge-sort
                    is an example of not-in-place sorting.
                    <br><br>
                    Stable and Not Stable Sorting
                    If a sorting algorithm, after sorting the contents, does not change the sequence of similar content
                    in
                    which they appear, it is called stable sorting.
                    <br><br>
                    Stable Sorting
                    If a sorting algorithm, after sorting the contents, changes the sequence of similar content in which
                    they appear, it is called unstable sorting.
                    <br><br>
                    Unstable Sorting
                    Stability of an algorithm matters when we wish to maintain the sequence of original elements, like
                    in a
                    tuple for example.
                    <br><br>
                    Adaptive and Non-Adaptive Sorting Algorithm
                    A sorting algorithm is said to be adaptive, if it takes advantage of already 'sorted' elements in
                    the
                    list that is to be sorted. That is, while sorting if the source list has some element already
                    sorted,
                    adaptive algorithms will take this into account and will try not to re-order them.
                    <br><br>
                    A non-adaptive algorithm is one which does not take into account the elements which are already
                    sorted.
                    They try to force every single element to be re-ordered to confirm their sortedness.
                    <br><br>
                    Important Terms
                    Some terms are generally coined while discussing sorting techniques, here is a brief introduction to
                    them −
                    <br><br>
                    Increasing Order
                    A sequence of values is said to be in increasing order, if the successive element is greater than
                    the
                    previous one. For example, 1, 3, 4, 6, 8, 9 are in increasing order, as every next element is
                    greater
                    than the previous element.
                    <br><br>
                    Decreasing Order
                    A sequence of values is said to be in decreasing order, if the successive element is less than the
                    current one. For example, 9, 8, 6, 4, 3, 1 are in decreasing order, as every next element is less
                    than
                    the previous element.
                    <br><br>
                    Non-Increasing Order
                    A sequence of values is said to be in non-increasing order, if the successive element is less than
                    or
                    equal to its previous element in the sequence. This order occurs when the sequence contains
                    duplicate
                    values. For example, 9, 8, 6, 3, 3, 1 are in non-increasing order, as every next element is less
                    than or
                    equal to (in case of 3) but not greater than any previous element.
                    <br>
                    <br>
                    Non-Decreasing Order
                    A sequence of values is said to be in non-decreasing order, if the successive element is greater
                    than or
                    equal to its previous element in the sequence. This order occurs when the sequence contains
                    duplicate
                    values. For example, 1, 3, 3, 6, 8, 9 are in non-decreasing order, as every next element is greater
                    than
                    or equal to (in case of 3) but not less than the previous one.
                </p>

                <div class="pages">

                    <a href="../learn/bubble-sort.php"><input type="button" value="Next" class="btn-right"></a>
                </div>
            </div>
        </center>
    </section>

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