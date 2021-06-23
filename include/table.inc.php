<?php
include "connect.inc.php";

$sql = "SELECT * from students";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '
        <tr class="table-tr">
        <th data-label="Student no:">'.$row["id"].'</th>
        <td data-label="First name:">'.$row["fname"].'</td>
        <td data-label="Last name:">'.$row["lname"].'</td>
        <td data-label="Middle name">'.$row["middle_name"].'</td>
        <td data-label="Section:">'.$row["section"].'</td>
        <td data-label="Course:">'.$row["course"].'</td>
        <td data-label="Major:">'.$row["major"].'</td>
        <td data-label="Type:">'.$row["type_irg"].'</td>
        <td data-label="Student status:">'.$row["stud_status"].'</td>
        <td data-label="Type of Scholar:">'.$row["scholar_type"].'</td>
        </tr>';
    }
}
