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
$artigo = addslashes($_POST['artigo']);

$sql = "SELECT * FROM infracoes_padrao WHERE artigo = :artigo";
$sql = $pdo->prepare($sql);
$sql->bindValue(":artigo", $artigo);
$sql->execute();
    if($sql->rowCount() > 0) {
        $dado = $sql->fetchAll();
    ?>
    <?php foreach($dado as $dados): ?>
<div>
        <p><?php echo $dados['descricao']; ?></p>
        <div>
            <button onclick="pegarDiv()" aria-id="pegardiv-<?php echo $i; ?>" id="pegardiv-<?php echo $i; ?>" class="pegar btn btn-primary">Pegar</button>
        </div>
        <hr>
    <?php endforeach; ?>
            <form action="http://localhost/defesaprevia/views/modal/inserir.php" method="post">
                <div class="">
                    <label for="padrao">Inserir Padrão</label>
                    <textarea id="padrao"  class="form-control" name="padrao" rows="3" data-length="120" required placeholder="Inserir"></textarea>
                </div>
                <div>
                    <input type="hidden" name="artigo_id" value="<?php echo $artigo; ?>">
                    <input type="submit" value="Inserir" name="inserir" disabled="false" id="inserir" class="inserir btn btn-primary" />
                </div>
            </form>
        </div>
    <?php
    } else {
    ?>
        <p>Nenhum Padrão encontrado</p>
        <form action="http://localhost/defesaprevia/views/modal/inserir.php" method="post">
                <div class="">
                    <label for="padrao">Inserir Padrão</label>
                    <textarea id="padrao"  class="form-control" name="padrao" rows="3" data-length="120" required placeholder="Inserir"></textarea>
                </div>
                <div>
                    <input type="hidden" name="artigo_id" value="<?php echo $artigo; ?>">
                    <input type="submit" value="Inserir" class="btn btn-primary" required />
                </div>
            </form>
    <?php
    }
    ?>