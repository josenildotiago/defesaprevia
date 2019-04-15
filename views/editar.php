<?php if (!isset($_GET['id'])) {
    header("Location: ".BASE_URL);
} ?>
<?php include (__INCLUDES_NAV__); ?>
<?php
$id_processo = $_GET['id'];
$id_logado = $_SESSION['login'];
$al = new Contatos();
$logador = $al->getPegarLogado($id_logado); 
$pro = new Contatos();
$pro = $pro->getProcesso($id_processo);

?>
<div class="container">
<?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); } ?>
<br>
    <div class="page-header">
        <h3>Editando Registros</h3>
    </div>
    <?php
    $id = $_SESSION['login'];
    $a = new Contatos();
    $logado = $a->getPegarLogado($id);
    $logado = $logado['nome'];
    $operador = $logado;
    ?>
    <form action="<?php echo BASE_URL; ?>editar/editarProcesso" method="POST" >
        <div class="form-row">
            <!-- CAMPO PROCESSO -->
            <div class="form-group col-md-2">
                <label for="processo">Processo</label>
                <input type="text" class="form-control" value="<?php echo $pro['processo']; ?>" name="processo" id="processo" required autofocus placeholder="0000/0000" style="text-transform: uppercase" >
            </div>
            <input type="hidden" class="form-control" value="<?php echo $pro['id']; ?>" name="id" id="id" >
            <!-- CAMPO REQUERENTE -->
            <div class="form-group col-md-6">
                <label for="nome">Requerente</label>
                <input type="text" class="form-control" value="<?php echo $pro['requerente']; ?>" name="requerente" size="74" maxlength="70" required  placeholder="Nome Completo" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO DATA -->
            <div class="form-group col-md-2">
                <label for="placa">Placa</label>
                <input type="text" class="form-control" value="<?php echo $pro['placa']; ?>" name="placa" id="placa" size="7" maxlength="14" required placeholder="AAA-0000" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO UF -->
            <div class="form-group col-md-1">
                <label for="uf">UF</label>
                <input type="text" class="form-control" value="<?php echo $pro['uf']; ?>" name="uf" id="uf" size="2" maxlength="14" required placeholder="uf" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO CODIGO INFRAÇÃO -->
            <div class="form-group col-md-1">
                <label for="codigoinfra">Cod.</label>
                <input type="text" onblur="pegarPorJson2()" value="<?php echo $pro['cod_infra']; ?>" class="form-control" name="cod_infra" id="codigoinfra" size="7" maxlength="14" required placeholder="000-0" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO ARTIGO -->
            <div class="form-group col-md">
                <label for="artigo">Artigo</label>
                <input type="text" onblur="pegarPorJson()" value="<?php echo $pro['artigo']; ?>" class="form-control" name="artigo" id="artigo" required placeholder="Art. 195" maxlength="20" style="text-transform: uppercase" />
            </div>
            <!-- CAMPO MODELO VEICULO -->
            <div class="form-group col-md-5">
                <label for="vaiculo_modelo">Modelo Veículo</label>
                <input type="text" class="form-control" value="<?php echo $pro['veiculo_modelo']; ?>" name="veiculo_modelo" id="veiculo_modelo" placeholder="Modelo Veículo" style="text-transform: uppercase" />
            </div>
            <!-- CAMPO COR -->
            <div class="form-group col-md-3">
                <label for="cor">Cor</label>
                <input type="text" class="form-control" value="<?php echo $pro['cor']; ?>" name="cor" id="cor" required placeholder="Cor do Veículo" style="text-transform: uppercase" />
            </div>
            <!-- CAMPO ANO DE FABRICAÇÃO -->
            <div class="form-group col-md-1">
                <label for="ano_fab">Ano</label>
                <input type="text" class="form-control" value="<?php echo $pro['ano_fab']; ?>" maxlength="4" name="ano_fab" id="ano_fab" required placeholder="1999" style="text-transform: uppercase" />
            </div>
            <!-- CAMPO OPERADOR -->
            <div class="form-group col-md-3">
                <label for="operador">Operador</label>
                <input type="text" class="form-control" value="<?php echo $logador['nome']; ?>" value="<?php echo $logado; ?>" name="operador" id="operador" size="100" maxlength="100" placeholder="Operador" style="text-transform: uppercase" value="Operador" readonly="readonly" />
            </div>
            <!-- CAMPO AUTOS -->
            <div class="form-group col-md">
                <label for="auto">Autos de Infrações</label>
                <textarea id="auto" onfocus="aoClicarOb()" onblur="aoSairOb()" class="form-control" name="autos" rows="3" data-length="120" placeholder="A 00000000 TE0000000 R 00000000" style="text-transform: uppercase" ><?php echo $pro['autos']; ?></textarea>
            </div>
            <!-- CAMPO PENALIDADE -->
            <div class="form-group col-md-12">
                <label for="penalidade">Penalidade</label>
                <textarea name="penalidade" id="penalidade" value="<?php echo $pro['penalidade']; ?>" onfocus="aoClicarOb4()" onblur="aoSairOb4()" class="form-control" name="penalidade" rows="3" data-length="120" placeholder="Artigo 169" style="text-transform: uppercase" ><?php echo $pro['penalidade']; ?></textarea>
            </div>
            <!-- CAMPO DOS FATOS -->
            <div class="form-row col-md-12">
                <label for="fato">Dos Fatos</label>
                <textarea id="fato" onfocus="aoClicarOb2()" value="<?php echo $pro['dos_fatos']; ?>" onblur="aoSairOb2()" class="form-control" name="dos_fatos" rows="3" data-length="120" placeholder="Dos fatos" style="text-transform: uppercase" ><?php echo $pro['dos_fatos']; ?></textarea>
                <a href="javascript:;" onclick="editar()" class="btn-sm btn-outline-success">Buscar Padrões</a>
            </div>
            <!-- CAMPO DO MERITO -->
            <div class="form-group col-md-12">
                <label for="merito">Dos Mérito</label>
                <textarea id="merito" onfocus="aoClicarOb3()" onblur="aoSairOb3()" class="form-control" name="dos_meritos" rows="3" data-length="120" placeholder="Do Mérito" style="text-transform: uppercase" ><?php echo $pro['dos_meritos']; ?></textarea>
                <a href="javascript:;" onclick="editar2()" class="btn-sm btn-outline-success">Buscar Padrões</a>
            </div>
            <!-- CAMPO DO DECISÃO -->
            <div class="form-group col-md-12">
                <label for="">Status</label>
            </div>
            <?php if($pro['estatos'] === "DEFERIDO"): ?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" checked="checked" type="radio" name="estatos" id="exampleRadios1" value="DEFERIDO">
                    <label class="form-check-label" for="exampleRadios1"><h5>Deferido </h5></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="estatos" id="exampleRadios2" value="INDEFERIDO">
                    <label class="form-check-label" for="exampleRadios2"><h5>Indeferido</h5></label>
                </div>
            <?php elseif($pro['estatos'] === "INDEFERIDO"): ?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input"  type="radio" name="estatos" id="exampleRadios1" value="DEFERIDO">
                    <label class="form-check-label" for="exampleRadios1"><h5>Deferido </h5></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" checked="checked" type="radio" name="estatos" id="exampleRadios2" value="INDEFERIDO">
                    <label class="form-check-label" for="exampleRadios2"><h5>Indeferido</h5></label>
                </div>
            <?php endif; ?>
            <!-- BOTÕES -->
            <p class="col-12"></p>
            <div class="">
                <input id="zer" type="submit" value="Editar" class="btn btn-primary" >
                <input type="reset" class="btn btn-primary" value="Limpar">
            </div>
        </div>
    </form>