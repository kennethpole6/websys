<?php
include "connect.inc.php";

if(isset($_POST["add_btn"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $mname=$_POST["mname"];
    $section=$_POST["section"];
    $course=$_POST["course"];
    $major=$_POST["major"];
    $type=$_POST["type"];
    $status=$_POST["status"];
    $scholar=$_POST["scholar"];
    $sql="INSERT INTO students(fname,lname,middle_name,section,course,major,type_irg,stud_status,scholar_type) values ('".$fname."','".$lname."','".$mname."','".$section."','".$course."','".$major."','".$type."','".$status."','".$scholar."')";
    $result = mysqli_query($conn,$sql);
    
  header("location:../index.php");
}