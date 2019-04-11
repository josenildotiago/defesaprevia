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
$dado = array();
$codigo_comp = addslashes($_POST['cod_infra']);
$sql = "SELECT * FROM infracoes WHERE codigo_comp = :codigo_comp";
$sql = $pdo->prepare($sql);
$sql->bindValue(":codigo_comp", $codigo_comp);
$sql->execute();
if ($sql->rowCount() > 0) {
    $dado = $sql->fetch();
    //echo $dado['decricao'];
    echo json_encode($dado);

}else{
    echo "Nada Encontrado";
}