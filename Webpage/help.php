<?php
include("include/session.php");
header('Content-Type: text/html; charset=UTF-8');
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="/lib/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/showusername.js"></script>
    <title>Timeraft | Help</title>
</head>

<body>
<section>
    <header>
        <nav id="main-nav">
            <ul>
                <li><a href="/mainboard.php">BOARDS</a></li>
                <li><img class="logo" alt="TIMERAFT" src="images/timeraftlogo-white.png"></li>
                <li id="account">
                    <ul>
                        <li><a href="/account.php">PROFILE</a></li>
                        <li><a href="/settings.php">SETTINGS</a></li>
                        <li><a href="/stats.php">STATISTICS</a></li>
                        <li class="with-line"><a href="/include/logout.php">LOG OUT</a></li>
                    </ul>
                </li>
                <li><a href="/help.php"><img class="help" alt="HELP" src="images/help.png"></a></li>
            </ul>
        </nav>

        <nav id="mobile-nav">
            <ul>
                <li><img class="logo" alt="TIMERAFT" src="images/timeraftlogo-white.png"></li>
                <li id="account2">
                    <ul>
                        <li><a href="/account.php">PROFILE</a></li>
                        <li><a href="/settings.php">SETTINGS</a></li>
                        <li><a href="/stats.php">STATISTICS</a></li>
                        <li><a href="/mainboard.php">BOARDS</a></li>
                        <li><a href="/help.php">HELP</a></li>
                        <li class="with-line"><a href="/include/logout.php">LOG OUT</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
</section>

<div class="main-body">
    <ul id="accordion">
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">How do I add a new board?</h2>
            <p class="phelp">1. Navigate to your main board page<br>
            2. Locate the plus ("+") button and click it<br>
            3. In a pop-up form fill out the fields. You have to add a board name, description is not required but it would be nice to know what that new board is all about<br>
            4. Click "Create" button</p>
        </li>
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">How do I delete a board?</h2>
            <p class="phelp">1. Navigate to your main board page<br>
                2. Click on a board you want to delete<br>
                3. In a pop-up form click "Delete" button</p>
        </li>
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">How do I change board settings?</h2>
            <p class="phelp">Sadly, this functionality is not available right now. You may always delete that board and make a new one if you have nothing to lose.</p>
        </li>
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">How do I see my tasks?</h2>
            <p class="phelp">1. Make sure you are on your main board page<br>
                2. Click on a board the tasks of which you would like to see<br>
                3. In a pop-up form click "Show tasks" button</p>
        </li>
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">How do I add a new task?</h2>
            <p class="phelp">1. Make sure you are on your selected board's task page<br>
                2. Locate the plus ("+") button next to "To do" and click it<br>
                3. In a pop-up form fill out the fields. You have to add a task name and choose due date, description is not required<br>
                4. Click "Create" button</p>
        </li>
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">How do I delete a task?</h2>
            <p class="phelp">1. Make sure you are on your selected board's task page<br>
                2. Click on a task you want to delete<br>
                3. In a pop-up form click "Delete" button</p>
        </li>
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">How do I start a task?</h2>
            <p class="phelp">1. Make sure you are on your selected board's task page<br>
                2. Click on a task you want to start in a "To do" column<br>
                3. In a pop-up form click "Start" button. You will be redirected to another page</p>
        </li>
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">How do I pause a task?</h2>
            <p class="phelp">1. Make sure you are on a timer page<br>
                2. Click on a pause ("II") button<br>
                3. You will be redirected back to your task page and the paused task should be in the "Pending" column</p>
        </li>
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">How do I continue a task?</h2>
            <p class="phelp">1. Make sure you are on your selected board's task page<br>
                2. Click on a task in "Pending" column that you want to continue<br>
                3. Click "Continue" button</p>
        </li>
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">How do I finish a task?</h2>
            <p class="phelp">1. Make sure you are on a timer page<br>
                2. Click on a stop (square) button<br>
                3. You will be redirected back to your task page and the stopped task should be in the "Finished" column</p>
        </li>
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">Where do I see my stats?</h2>
            <p class="phelp">1. Point your cursor on your name in upper right corner<br>
                2. From the drop-down menu select "Statistics"<br>
                3. On your stats page you will see a pie chart for all boards you have. To see stats for a specific board choose the one you want from the drop-down menu under the chart</p>
        </li>
        <li>
            <input class="helpinput" type="checkbox" checked>
            <i></i>
            <h2 class="h2help">How do I change my password/name/... ?</h2>
            <p class="phelp">1. Point your cursor on your name in upper right corner<br>
                2. From the drop-down menu select "Settings"<br>
                3. Make all the changes you want and click "Change account" button</p>
        </li>
    </ul>
</div>

</body>
</html>