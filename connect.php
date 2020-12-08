<?php

$database="dash1";
$root="root";
$password="";



$conn = new PDO('mysql:host=localhost;dbname='.$database.';',$root,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>