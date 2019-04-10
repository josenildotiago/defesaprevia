<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/defesaprevia/");
	define("__INCLUDES_NAV__", "includes/nav.php");
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "getranmc_cadastro_estacionamento";
	$dsn = "mysql:host={$host};dbname={$db}";
	$options = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
} else {
	define("BASE_URL", "http://meusite.com.br/defesaprevia/");
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "getranmc_cadastro_estacionamento";
	$dsn = "mysql:host={$host};dbname={$db}";
	$options = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
}

global $db;
try{
	$db = new PDO($dsn,$user,$pass,$options);
	//$this->pdo = new PDO("mysql:dbname=usuarios;host=localhost","root","");
}
catch(PDOException $e){
	echo "ERRO AO CONECTAR AO BANCO, CAUSA: ". $e->getMessage();
}