<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "getranmc_cadastro_estacionamento";
$dsn = "mysql:host={$host};dbname={$db}";
$options = array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
try{
    $pdo = new PDO($dsn,$user,$pass,$options);
}
catch(PDOException $e){
    echo "ERRO AO CONECTAR AO BANCO, CAUSA: ". $e->getMessage();
}
$a = new Contatos();
?>
<div>
    <p>Padrões</p>
</div>