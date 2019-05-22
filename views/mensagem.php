<?php include(__INCLUDES_NAV_DEF__); ?>
<?php if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
} ?>
<?php
if (isset($_SESSION['login'])) : ?>
    <?php
    $id_user = $_SESSION['login'];
    print_r($id_user);
    $a = new Contatos();

    $listas = $a->getAllDefesaModalPorPessoa($id_user);
    $listha = $a->getAllMensagem($id_user);
    ?>
    <?php foreach ($listas as $items) : ?>
        <div class="container">
            <div>
                <label for="id"><b>ID</b></label>
                <label for=""><?php echo $items['id_user']; ?></label>
            </div>
            <div>
                <label for="id"><b>ID da MSG</b></label>
                <label for=""><?php echo $items['id']; ?></label>
            </div>
            <div>
                <?php foreach ($listha as $items2) : ?>
                    <label for="mensagem"><b>Mensagem</b></label><br>
                    <label for=""><?php echo $items2['justificativa']; ?></label>
                <?php endforeach; ?>
            </div>
            <div>
                <label for="resposta"><b>Resposta</b></label><br>
                <label for=""><?php echo $items['resposta']; ?></label>
            </div>
            <textarea name="" class="col-10" id="" cols="" rows="1"></textarea></br><button class="btn btn-success" type="submit">Enviar</button>
        </div>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>


<?php if (isset($_SESSION['painel'])) : ?>
    <?php
    $contato = new Contatos();
    $cpflogado = new Contatos();
    $lista = $contato->getAllDefesaModal();

    ?>
    <?php foreach ($lista as $item) : ?>
        <?php $a = new Contatos(); ?>
        <div class="container">
            <div>
                <label for="id">ID</label><br>
                <label for=""><?php echo $item['id_user']; ?></label>
                <?php
                $b = $a->getPegarLogado($item['id_user']);

                $nome = $b['nome'];
                //$c = $cpflogado->getDeferidor2($cpf);
                ?>
            </div>
            <div>
                <label for="id">Julgador</label><br>
                <label for=""><?php echo $nome;  ?></label>
            </div>
            <div>
                <label for="id">Mensagem</label><br>
                <label for=""><?php echo $item['justificativa']; ?></label>
            </div>
            <div>
                <label for="id">Resposta</label><br>
                <label for=""><?php echo $item['resposta']; ?></label>
            </div>
            <textarea name="" id="" cols="30" rows="1"><?php echo $item['id_user']; ?></textarea><button class="btn btn-success" type="submit">Enviar</button>

        </div>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>