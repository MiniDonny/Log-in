<?php
    /*VALID SERVER DATA*/
    $userDB = "root";
    $passwordDB = "root";
    $hostDB = "localhost";
    $logindb = 'logindb';
    $datab = "logindb";
    /*DATABASE CONECTION*/
    $connection = mysqli_connect($hostDB, $userDB, $passwordDB);
    /*WE VEREFY THE CONNECTION TO THE DATABASE*/
    if (!$connection) {
        die('Has not connected successfully: ' . mysqli_connect_error());
    } else {
        echo '<b><h3>Connected successfully</h3></b>';
    }
    /*CHECK IF THE DATABASE EXISTS (OPTIONAL)*/
    if (mysqli_query($connection, "USE $datab")) {
        echo "<h3>Selected database: $datab</h3>";
    } else {
        die("Could not select database: " . mysqli_error($connection));
    }
    /*SELECT THE DATABASE*/
    $db = mysqli_select_db($connection, $datab);
    if (!$db) {
        echo "Table could not be found";
    } else {
        echo "<h3>Selected table: Register</h3>";
    }
?>
