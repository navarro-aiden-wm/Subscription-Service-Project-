<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 4/14/16
 * Time: 3:57 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Club</title>
    <script src="jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="navagation.css"/>
    <style>
        th{
            width: 24.9%;
        }
        .img-circle{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div style="z-index: 10" id='cssmenu'>
    <ul>
        <li><a href='index.php'><span>Home</span></a></li>
        <li><a href='intro.html'><span>Intro</span></a></li>
        <li><a href='signUp.php'><span>Sign up</span></a></li>
        <li><a href="UserMusic.php"><span>Your Music</span></a></li>
    </ul>
</div>

<div id="content">
    <h1 align="center">Your Music</h1>
    <div style="text-align: center">
        <img src="imgs/music.jpg"  height="625px">
    </div>
    <h3 style="text-align: center">About</h3>
    <p style="font-size: large"></p>

</div>
</body>
</html>