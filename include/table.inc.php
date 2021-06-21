<?php
include "connect.inc.php";

$sql = "SELECT * from students";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '
        <tr class="table-tr">
        <th>'.$row["id"].'</th>
        <td>'.$row["fname"].'</td>
        <td>'.$row["lname"].'</td>
        <td>'.$row["middle_name"].'</td>
        <td>'.$row["section"].'</td>
        <td>'.$row["course"].'</td>
        <td>'.$row["major"].'</td>
        <td>'.$row["type_irg"].'</td>
        <td>'.$row["stud_status"].'</td>
        <td>'.$row["scholar_type"].'</td>
        </tr>';
    }
}
