<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "login";
$port = 3306;

try{
    //Conexão com a porta
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //Conexão sem a porta
     //$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

   
}  catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $err->getMessage();
}