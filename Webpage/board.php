<?php

include("include/session.php");

header('Content-Type: text/html; charset=UTF-8');

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'> <!--Font-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <title>Timeraft | Board</title>
</head>

<body>
<section>
    <header>
        <nav>
            <ul>
                <li><a href="/mainboard.php">BOARDS</a></li>
                <li id="account">

                <li><a href="/help.php"><img class="help" src="images/help.png" \></a></li>
            </ul>
        </nav>
        <img class="logo" src="images/timeraftlogo-white.png" \>
    </header>
</section>

<div class="main-body">
    <div class="board">
        <div class="container">
            <div class="list">
                <h3>To Do</h3>
                <hr>
                <div class="boardpcontainer">
                    <p>Task 1</p>
                    <p>Task 2</p>
                    <p>Task 7</p>
                    <p>Task 7</p>
                    <p>Task 7</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="list">
                <h3>Pending</h3>
                <hr>
                <div class="boardpcontainer">
                    <p>Task 3</p>
                    <p>Task 4</p>
                    <p>Task 7</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="list">
                <h3>Finished</h3>
                <hr>
                <div class="boardpcontainer">
                    <p>Task 5</p>
                    <p>Task 6</p>
                    <p>Task 7</p>
                    <p>Task 7</p>
                    <p>Task 7</p>
                    <p>Task 7</p>
                    <p>Task 7</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>