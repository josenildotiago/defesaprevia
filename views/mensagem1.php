<?php include(__INCLUDES_NAV_DEF__); ?>
<?php
    /* $page = BASE_URL."mensagem";
    $sec = "10";
    header("Refresh: $sec; url=$page"); */
?>
<h3 class="container" >Mensagens</h3>
<?php if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
} ?>
<?php
if (isset($_SESSION['login'])) : ?>
    <?php
    $id_user = $_SESSION['login'];
    $a = new Contatos();
    $d = new Contatos();
    $listas = $a->getAllDefesaModalPorPessoa($id_user);
    $listha = $d->getAllMensagem($id_user);
    ?>
    <?php //foreach ($listas as $items) : ?>
        <div class="container rolagem">
                <?php foreach ($listha as $items2) : ?>
                <?php
                    if ($items2['hora'] == null) {
                        $hora = "";
                    }else {
                        $hora = $items2['hora'];
                        $hora = date('d/m/Y H:i:s', strtotime($hora));
                    }
                    

                ?>
                    <?php if($items2['justificativa']==null): ?>
                        
                    <?php else: ?>
                        <div class="justificativa">
                            <p><?php echo $items2['justificativa']; ?></span></p>
                            <span class="horario p-2" ><?php echo $hora; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if($items2['resposta']==null): ?>
                        
                    <?php else: ?>
                        <div class="resposta">
                            <p><?php echo $items2['resposta']; ?></span></p>
                            <span class="horario p-2" ><?php echo $hora; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
        </div>
        <hr>
        <?php if(isset($items2['id_user'])==$id_user): ?>
            <div class="container" >
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $id_user; ?>">
                    <textarea class="input-group textareanova" name="message" class="col-12" id="message" placeholder="Digite aqui sua mensagem" cols="" rows="2"></textarea></br><button class="btn btn-success" type="submit">Enviar</button>
                </form>
            </div>
        <?php else: ?>

        <?php endif; ?>
        <hr>
    <?php //endforeach; ?>
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