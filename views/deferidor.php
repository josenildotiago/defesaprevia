<?php
if (isset($_SESSION['painel'])) {
    
} else {
    header("Location: ".BASE_URL);
    exit;
}
?>
<?php include (__INCLUDES_NAV_DEF__); ?>
<div class="container" >
    <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); } ?>
</div>
<?php
$abc = new Contatos();
$lista = $abc->getAll();
?>
<div class="container-fluid" >
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">REQUERENTE</th>
            <th scope="col">PLACA</th>
            <th scope="col">VEÍCULO</th>
            <th scope="col">PROCESSO</th>
            <th scope="col">AUTO(S)</th>
            <th scope="col">DATA CADASTRO</th>
            <th scope="col">JULGADOR</th>
            <th scope="col">DOCUMENTO</th>
            <th scope="col">PARECER</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach($lista as $item): ?>
                <?php
                $data = $item['data_entrada'];
                $data = date('d/m/Y H:i:s', strtotime($data));
                
                ?>
                <td scope="row"><?php echo strtoupper($item['id']); ?></td>
                <td scope="row"><?php echo strtoupper($item['requerente']); ?></td>
                <td><?php echo strtoupper($item['placa']); ?></td>
                <td><?php echo strtoupper($item['veiculo_modelo']); ?></td>
                <td><?php echo strtoupper($item['processo']); ?></td>
                <td><?php echo strtoupper($item['autos']); ?></td>
                <td><?php echo strtoupper($data); ?></td>
                <td><?php echo strtoupper($item['operador']); ?></td>
                <td>
                <a class="btn btn-primary btn-sm" href="<?php echo BASE_URL; ?>arquivo?id=<?php echo $item['id']; ?>" role="button" target="_blank">Visualizar</a>
                </td>
                <td>
                <?php if($item['estatos'] === "INDEFERIDO"): ?>
                <a class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Contestar?" onclick="editar4(<?php echo $item['id']; ?>)" href="javascript:;" role="button" >INDEFERIDO</a>
                <?php else: ?>
                    <a class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Contestar?" onclick="editar4(<?php echo $item['id']; ?>)" href="javascript:;" role="button" >DEFERIDO</a>
                <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div id="modal" class="modal fade" role="dialog" >
    <div class="modal-dialog" >
        <div class="modal-content" >
            <div class="modal-body" ></div>
        </div>
    </div>
</div>