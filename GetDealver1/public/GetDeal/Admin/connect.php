<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$con = mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($con,"utf8");
?>