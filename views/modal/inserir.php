<?php
session_start();
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


if (isset($_POST['padrao']) && !empty($_POST['padrao']))  {
    
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger text-center' role='alert'>Nenhum padrão foi adcionado!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
    header("Location: http://localhost/defesaprevia/home");
}

$texto = addslashes($_POST['padrao']);
$artigo_id = addslashes($_POST['artigo_id']);

$sql = "INSERT INTO infracoes_padrao SET artigo = :artigo_id, descricao = :padrao";
$sql = $pdo->prepare($sql);
$sql->bindValue(':artigo_id', $artigo_id);
$sql->bindValue(':padrao', $texto);
$sql->execute();
if($sql->rowCount() > 0) {
    $_SESSION['msg'] = "<div class='alert alert-success text-center' role='alert'>Padrão inserido com sucesso!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
    header("Location: http://localhost/defesaprevia/home");
    return true;
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger text-center' role='alert'>Não foi possivel inserir esse padrão!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
    header("Location: http://localhost/defesaprevia/home");
    return false;
}