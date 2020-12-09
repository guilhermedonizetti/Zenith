<?php
$servername = "localhost:3306"; //padrão - server local
$database = "dashboard";//$_POST['database']; //alterar conforme o nome do seu banco de dados
$username = "root"; //padrão - root
$password = "";//senha de conexão do banco de dados.
// Create connection
$conexao = mysqli_connect($servername, $username, $password, $database);
