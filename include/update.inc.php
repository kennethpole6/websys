<?php
include "connect.inc.php";

if(isset($_POST["update_btn"]))
{
    $id=$_POST["id"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $mname=$_POST["mname"];
    $section=$_POST["section"];
    $course=$_POST["course"];
    $major=$_POST["major"];
    $type=$_POST["type"];
    $status=$_POST["status"];
    $scholar=$_POST["scholar"];
    $sql="UPDATE students set fname='".$fname."',lname='".$lname."',middle_name='".$mname."',section='".$section."',course='".$course."',major='".$major."',type_irg='".$type."',stud_status='".$status."',scholar_type='".$scholar."' where id = '".$id."'";
    $result = mysqli_query($conn,$sql);
    
  header("location:../index.php");
}