<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/3/16
 * Time: 6:01 PM
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Club</title>
    <script src="jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        // Popup window code
        function newPopup(url) {
            popupWindow = window.open(
                url, 'popUpWindow', 'height=1000%,width=1000%,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
        }
    </script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="navigation.css"/>
    <style>
        th {
            width: 24.9%;
        }

        .img-circle {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<header>
</header>

<div style="z-index: 10" id='cssmenu'>
    <ul>
        <li><a href='index.php'><span>Home</span></a></li>
        <li><a href='intro.html'><span>Intro</span></a></li>
        <li><a href='signUp.php'><span>Sign up</span></a></li>
        <li><a href="UserMusic.php"><span>Your Music</span></a></li>
    </ul>
</div>
<!-- END OF NAVIGATION BAR -->

<div id="content">
    <h1 align="center">Home</h1>
    <table align="center">
        <tr style="margin-bottom: 10px;">
            <th>
                <img class="img-circle" src="imgs/rock.jpg" width="200px" height="200px">
                <form name="add" method="post">
                    <p>Rock</p>
                    <button name="add" type="submit" value="1">Add to list</button>
                </form>
            </th>

            <th>
                <img class="img-circle" src="imgs/pop.jpg" width="200px" height="200px">
                <form name="add" method="post">
                    <p>Pop</p>
                    <button name="add" type="submit" value="2">Add to list</button>
                </form>
            </th>

            <th>
                <img class="img-circle" src="imgs/jazz.jpeg" width="200px" height="200px">
                <form name="add" method="post">
                    <p>Jazz</p>
                    <button name="add" type="submit" value="3">Add to list</button>
                </form>
            </th>
        </tr>

        <tr>
            <th>
                <img class="img-circle" src="imgs/rap.jpeg" width="200px" height="200px">
                <form name="add" method="post">
                    <p>Rap</p>
                    <button name="add" type="submit" value="4">Add to list</button>
                </form>
            </th>
            <th>
                <img class="img-circle" src="imgs/country.jpg" width="200px" height="200px">
                <form name="add" method="post">
                    <p>Country</p>
                    <button name="add" type="submit" value="5">Add to list</button>
                </form>
            </th>
            <th>
                <img class="img-circle" src="imgs/blues.jpeg" width="200px" height="200px">
                <form name="add" method="post">
                    <p>Blues</p>
                    <button name="add" type="submit" value="6">Add to list</button>
                </form>
            </th>
        </tr>

        <tr>
            <th>
                <img class="img-circle" src="imgs/hop.png" width="200px" height="200px">
                <form name="add" method="post">
                    <p>Hop</p>
                    <button name="add" type="submit" value="7">Add to list</button>
                </form>
            </th>
            <th>
                <img class="img-circle" src="imgs/punk.png" width="200px" height="200px">
                <form name="add" method="post">
                    <p>Punk</p>
                    <button name="add" type="submit" value="8">Add to list</button>
                </form>
            </th>
            <th>
                <img class="img-circle" src="imgs/electronic.png" width="200px" height="200px">
                <form name="add" method="post">
                    <p>Electronic</p>
                    <button name="add" type="submit" value="9">Add to list</button>
                </form>
            </th>
        </tr>
    </table>
    <br/>
</div>

</body>
</html>