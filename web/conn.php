<?php
    $server="localhost";
    $user="root";
    $password="";
    $database="guestbook";
    $connection = mysqli_connect($server, $user, $password, $database);
    if (!$connection){
        die;
        echo "Connection Disconnected!";
    }
?>