<?php
include "connect.inc.php";
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$email= $_POST["email"];
$username= $_POST["username"];
$password= $_POST["password"];
$mobile= $_POST["mobile"];
$sql="INSERT INTO account (acc_user,acc_pass,fname,lname,email,mobile) values (?,?,?,?,?,?)";
$stmt= mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location:../register.php?error!");
exit();
}
mysqli_stmt_bind_param($stmt,"ssssss",$username,$password,$fname,$lname,$email,$mobile);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location:../register.php?account-created-successfully");
exit();


