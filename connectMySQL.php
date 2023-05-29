<?php
header('Access-Control-Allow-Origin', '*');

$connect = new mysqli('localhost', 'root', '111111', 'coffee_chain');
mysqli_set_charset($connect,"utf8"); 
if ($connect->connect_errno) {
    die("Connection failed: " . mysqli_connect_error());
    // exit();
}//else echo "Connected successfully";
?>
