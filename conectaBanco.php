<?php

$database=$_POST["database"];
$root=$_POST["user"];
$password=$_POST["password"];


$conn = new PDO('mysql:host=localhost;dbname='.$database.';',$root,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result_msg="INSERT INTO mensagem (mensagem) VALUES('funciona')";
$query =$conn->prepare($result_msg);


$query->execute();

?>