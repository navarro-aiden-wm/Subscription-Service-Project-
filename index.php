<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/3/16
 * Time: 6:01 PM
 */
require_once("connect.php");

if(@$_POST['add'])
{
    $productId = $_POST['add'];

    $sql = "SELECT * FROM genre WHERE productId = :productId";
    $res = $dbh->prepare($sql);
    $res -> execute(array('productId'=>$productId));
    $count = $res->rowCount();

//      This checks if the item the user wants to add to their cart isn't already in there. This prevents duplicate rows
//      from being created in the database.
    if($count == 0)
    {
        $sql = "INSERT INTO genre (productId, userId) VALUES (:productId, '1')";
        $stmt = $dbh -> prepare($sql);
        $stmt -> execute(
            array('productId'=>$productId)
        );
        header("Location: added.html");
    }
    else
        echo "";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Club</title>
    <script src="jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        // Popup window code

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
        <li><a href="userMusic.php"><span>Your Music</span></a></li>
        <li><a href="contact.html"><span>Contact & Info</span></a></li>
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
                    <p>Hip Hop</p>
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