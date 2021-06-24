<?php
include "connect.inc.php";

$id = $_POST["id"];

$sql = "SELECT * from students where id = '".$id."'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
while($rows = mysqli_fetch_assoc($result)){
    echo '
    <input type="text" placeholder="ID" name="id" id="stud_id" value="'.$rows['id'].'">
    <button type="button" class="btn btn-primary" onclick="find();">Find</button>
    <input type="text" placeholder="FirstName" name="fname" value="'.$rows['fname'].'">
    <input type="text" placeholder="LasttName" name="lname" value="'.$rows['lname'].'">
    <input type="text" placeholder="MiddleName" name="mname" value="'.$rows['middle_name'].'">
    <input type="text" placeholder="Section" name="section" value="'.$rows['section'].'">
    <input type="text" placeholder="Course" name="course" value="'.$rows['course'].'">
    <input type="text" placeholder="Major" name="major" value="'.$rows['major'].'">
    <input type="text" placeholder="Type" name="type" value="'.$rows['type_irg'].'">
    <input type="text" placeholder="Status" name="status" value="'.$rows['stud_status'].'">
    <input type="text" placeholder="Type of Scholar" name="scholar" value="'.$rows['scholar_type'].'">';
}
}