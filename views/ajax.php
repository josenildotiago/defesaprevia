<?php
if (isset($_SESSION['login'])) : ?>
    <?php
    $id_user = $_SESSION['login'];
    $a = new Contatos();
    $d = new Contatos();
    $listas = $a->getAllDefesaModalPorPessoa($id_user);
    $listha = $d->getAllMensagem($id_user);
    ?>
    <div id="listadada">
        <div class="container rolagem"  >
            
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
        </div>
        <hr>
        
<?php endif; ?>