<?php 


$name = $_POST["name"];
$base64_string = $_POST["image"];
$outputfile = "C:/xampp/htdocs/serverAPI_CoffeeChain/Images/".$name."" ;
$filehandler = fopen($outputfile, 'wb' ); 
fwrite($filehandler, base64_decode($base64_string));
fclose($filehandler); 


// header('Content-Type: application/json');
?>
