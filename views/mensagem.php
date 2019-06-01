<?php include(__INCLUDES_NAV__); ?>
<h1 class="texto-msg" >Mensagens</h1>
<div id="listadada"></div>

<?php
$id_user = $_SESSION['login'];
?>
    <div class="container" >
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id_user; ?>">
            <textarea class="input-group textareanova" name="message" class="col-12" id="message" placeholder="Digite aqui sua mensagem" cols="" rows="2"></textarea>
            <button class="btn btn-success" type="submit">Enviar</button>
        </form>
    </div>