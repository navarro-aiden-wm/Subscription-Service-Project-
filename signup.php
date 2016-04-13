<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/9/16
 * Time: 4:34 PM
**/
$hostname = 'localhost';
$username = 'root';
$password = 'password';

try
{
    $dbh = new PDO("mysql:host=$hostname;dbname=SubService", $username, $password);


    // set the PDO error mode to exception

}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$error = false;
$success = false;

if(@$_POST['addUser'])
{
    if($_POST['nameLast'] && $_POST['nameFirst'] && $_POST['password'] && $_POST['email'] && $_POST['username'] && $_POST['birthDate'])
    {
        $stmt = $dbh->prepare('INSERT INTO userSignUp (nameLast, nameFirst, email, birthDate, username, password) VALUES (:nameLast, :nameFirst, :email, :birthDate, :username, :password)');
        $result = $stmt->execute(
            array(
                'nameLast'=>$_POST['nameLast'],
                'nameFirst'=>$_POST['nameFirst'],
                'email'=>$_POST['email'],
                'birthDate'=>$_POST['birthDate'],
                'username'=>$_POST['username'],
                'password'=>$_POST['password'],
            )
        );

        if($result)
        {
            $success = "User " . $_POST['nameFirst'] . " was successfully saved.";
        }
        else
        {
            $success = "There was an error saving " . $_POST['nameFirst'];
        }
    }
}




$stmt = $dbh->prepare('SELECT * FROM userSignUp');
$stmt->execute();
$users = $stmt->fetchAll();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Watch Shop</title>
    <script src="jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="navigation.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{
            background-color: #525252;
        }
        .centered-form{
            margin-top: 60px;
        }

        .centered-form .panel{
            background: rgba(255, 255, 255, 0.8);
            box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
        }
        img {
            border: solid;
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<div style="z-index: 10" id='cssmenu'>
    <ul>
        <li><a href='index.php'><span>Home</span></a></li>
        <li><a href='info.html'><span>Info</span></a></li>
        <li><a href='signup.php'><span>Sign up</span></a></li>
        <li><a href='cart&checkout.php'><span>Shopping Cart</span></a></li>
    </ul>
</div>

<div id="content">
<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign up for free</h3>
                </div>
                <div class="panel-body">
                    <form name="addUser" method="post">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nameFirst" id="first_name" class="form-control input-sm" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nameLast" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" class="form-control input-sm" placeholder="username">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="date" name="birthDate" id="birthDate" class="form-control input-sm" placeholder="Birth Date">
                                </div>
                            </div>
                        </div>

                        <button type="submit" name = "addUser" value="1" class="btn btn-info btn-block">Submit</button>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p align="center">For the purpose of the demonstration of this site all entered information will be displayed.</p>

    <table class="table" align="center">
        <thead>
        <th>User Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Username</th>
        <th>Birth Date</th>
        </thead>

        <tbody>
        <?php
        foreach($users as $user){}
           ?>
            <tr>
                <td><?php echo $user['iduserSignUp']?></td>
                <td><?php echo $user['nameFirst']?></td>
                <td><?php echo $user['nameLast']?></td>
                <td><?php echo $user['email']?></td>
                <td><?php echo $user['password']?></td>
                <td><?php echo $user['username']?></td>
                <td><?php echo $user['birthDate']?></td>
            </tr>
            <?php

        ?>
        </tbody>
    </table>


</div>

<script type="text/javascript">

</script>

<div align="center" class="error">
    <?php
    if($error){
        echo $error;
        echo '<br /><br />';
    }
    ?>
</div>


<div align="center" class="success">
    <?php
    if($success){
        echo $success;
        echo '<br /><br />';
    }
    ?>
</div>


</body>
</html>
