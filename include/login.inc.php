<?php
include 'connect.inc.php';
$username = $_POST["user"];
$password = $_POST["pass"];

$sql = "SELECT * from account where acc_user='".$username."' and acc_pass = '".$password."'";
$result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        header("location:../index.php");
        exit();
    }else{
        echo "invalid";
        exit();
    }