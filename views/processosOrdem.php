<?php include (__INCLUDES_NAV__); ?>
<?php
$u = new Contatos();
$lista = $u->getAll2();
?>
<div class="container-fluid" >
    <table class="table table-bordered table-dark frletra">
        <thead class="cabeca" >
            <tr>
            <th scope="col">REQUERENTE</th>
            <th scope="col">PLACA</th>
            <th scope="col">VEÍCULO</th>
            <th scope="col">PARECER</th>
            <th scope="col">PROCESSO</th>
            <th scope="col">AUTO(S)</th>
            <th scope="col">UF</th>
            <th scope="col">DATA CADASTRO</th>
            <th scope="col">OPERADOR</th>
            <th scope="col">ARTIGO</th>
            <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach($lista as $item): ?>
            <td scope="row"><?php echo strtoupper($item['requerente']); ?></td>
            <td><?php echo strtoupper($item['placa']); ?></td>
            <td><?php echo strtoupper($item['veiculo_modelo']); ?></td>
            <?php if($item['estatos'] == "INDEFERIDO"): ?>
                <td class="trocar1"><?php echo strtoupper($item['estatos']); ?></td>
            <?php else: ?>
                <td class="trocar2"><?php echo strtoupper($item['estatos']); ?></td>
            <?php endif; ?>
            <td><?php echo strtoupper($item['processo']); ?></td>
            <td><?php echo strtoupper($item['autos']); ?></td>
            <td><?php echo strtoupper($item['uf']); ?></td>
            <td><?php echo strtoupper($item['data_entrada']); ?></td>
            <td><?php echo strtoupper($item['operador']); ?></td>
            <td><?php echo strtoupper($item['artigo']); ?></td>
            <td><a class="btn btn-primary btn-sm" href="<?php echo BASE_URL; ?>arquivo?id=<?php echo $item['id']; ?>" role="button" target="_blank">Gerar Doc.</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>