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
        <li><a href="userMusic.php"><span>Your Music</span></a></li>
        <li><a href="contact.html"><span>Contact & Info</span></a></li>
    </ul>
</div>

<div id="content">
    <h1 align="center">Your Music</h1>
    <p style="font-size: large">All genres you have selected will be shown below, this is where you can remove genres that are unwanted.</p>

    <p style="font-size: large">1= rock, 2= pop, 3= jazz, 4= rap, 5= country, 6= blues, 7= hip hop, 8= punk, 9= electronic.</p>
    <div id="music">
        <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

            <?php
            try
            {
                $dbh = new PDO('mysql:host=localhost;dbname=SubService', 'root', 'password');

                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }

            if (isset($_POST['submit']))
            {
                $query = "DELETE FROM userSignUp WHERE userId = :delete_id";
                $result = $dbh->prepare($query);
                foreach ($_POST['todelete'] as $delete_id)
                {
                    $result->execute(array('delete_id'=>$delete_id));
                }
                echo 'Item(s) removed.<br />';
            }

            $query = "SELECT * FROM userSignUp";
            $result = $dbh->prepare($query);
            $result ->execute();
            $customers = $result->fetchAll();

            foreach ($customers as $customer)
            {
                echo '<input type="checkbox" value="' . $customer['userId'] . '" name="todelete[]" />';
                echo $customer['userId'];
                echo '<br />';
            }
            ?>
            <input type="submit" name="submit" value="Remove" />
        </form>
    </div>
</div>
</body>
</html>