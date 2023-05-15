<?php

include 'connectMySQL.php';

$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM `cosocoffee` WHERE `user` = '".$user."' AND `pass` = '".$pass."'";
$queryResult = $connect->query($sql); 
    $result=array();
    while($fetchData=$queryResult->fetch_assoc()){
        $result[]=$fetchData;
    }
    echo json_encode($result); 
?>