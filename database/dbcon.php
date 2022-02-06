<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "student-progress";

$con = mysqli_connect($server, $user, $password, $db);

if($con){
    echo "";
}else{
    echo "No connection";
}
?>