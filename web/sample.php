<?php
require ('conn.php');
    if(isset($_POST['mess'])){
        $name = $_POST['cname'];
        $message = $_POST['mess'];
        if($name == ""||$message == ""){
            echo "Error";
        }
        else{
        $sql = "INSERT INTO `gb`( `cname`, `mess`) VALUES ($name,$message);";
        mysqli_query($con, $sql);
        }
    }
?>