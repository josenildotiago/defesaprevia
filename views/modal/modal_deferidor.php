<?php
    $id = addslashes($_POST['artigo']);
    $a = new Contatos();
    $ab = $a->get($id);
    print_r($ab);
    exit;

?>
<form action="deferidor/addModal" method="post">
    <div class="" >
        <label for="justificativa">Justificativa</label>
        <textarea class="form-control" name="justificativa" id="justificativa" cols="30" rows="10"></textarea>
    </div><br>
    <div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" value="Enviar" name="inserir" id="inserir" class="btn btn-primary" />
    </div>
</form>