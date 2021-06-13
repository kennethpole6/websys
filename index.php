<?php
session_start();
if(isset($_SESSION["user"])){
    echo "successful";
    echo $_SESSION["user"];
}
else{
    header("location:login.php");
exit();    
}
