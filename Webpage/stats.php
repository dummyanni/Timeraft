<?php
include("include/session.php");
header('Content-Type: text/html; charset=UTF-8');
?>

<!DOCTYPE html>
<html manifest="/cache.manifest">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="/lib/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/showusername.js"></script>
    <script type="text/javascript" src="js/diagramload.js"></script>
    <title>Timeraft | Statistics</title>
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
    <canvas id="diagramCanvas"></canvas>
    <br>
    <select id="boardSelect"></select>
</div>

</body>
</html>