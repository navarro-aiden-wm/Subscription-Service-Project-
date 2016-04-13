<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 3/3/16
 * Time: 5:42 PM
 */

try
{
    $dbh = new PDO("mysql:host=localhost;dbname=Watches", 'root', 'password');
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>