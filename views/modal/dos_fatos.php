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
$artigo = addslashes($_POST['der']);

$sql = "SELECT texto_desc FROM infracoes WHERE artigo = :artigo";
$sql = $pdo->prepare($sql);
$sql->bindValue(":artigo", $artigo);
$sql->execute();
    if($sql->rowCount() > 0) {
        $dado = $sql->fetch();
    ?>
        <div><p><?php echo $dado['texto_desc']; ?></p></div>
    <?php
    } else {
    ?>
        <div><p>Nenhum Padrão Encontrado</p></div>
    <?php
    }
    ?>