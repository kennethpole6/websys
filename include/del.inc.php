<?php
include "connect.inc.php";

if(isset($_POST["delete_btn"]))
{
    $id=$_POST["id"];
    $sql="DELETE from students where id ='".$id."'";
    $result = mysqli_query($conn,$sql);
    
  header("location:../index.php");
}