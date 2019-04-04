<div class="container">
<?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); } ?>
    <p>&nbsp;</p>
    <div class="page-header">
        <h3>Cadastrando Registros</h3>
    </div>
    <?php
    $id = $_SESSION['login'];
    $a = new Contatos();
    $logado = $a->get($id);
    $log = $logado['nome'];
    $log = explode(" ", $log);
    ?>
    <form action="<?php echo BASE_URL; ?>contatos/add_save" method="POST">
        <div class="form-row">
            <!-- CAMPO PROCESSO -->
            <div class="form-group col-md-2">
                <label for="processo">Processo</label>
                <input type="text" class="form-control" name="processo" id="processo" required autofocus placeholder="0000/0000" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO REQUERENTE -->
            <div class="form-group col-md-7">
                <label for="nome">Requerente</label>
                <input type="text" class="form-control" name="nome" size="74" maxlength="70" required  placeholder="Nome Completo" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO DATA -->
            <div class="form-group col-md-2">
                <label for="placa">Placa</label>
                <input type="text" class="form-control" name="placa" id="placa" size="7" maxlength="14" required placeholder="AAA-0000" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO UF -->
            <div class="form-group col-md-1">
                <label for="uf">UF</label>
                <select class="custom-select" name="uf" id="uf" style="text-transform: uppercase">
                    <option value="RN">RN</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>
            </div>
            <!-- CAMPO AUTOS -->
            <div class="form-group col-md-9">
                <label for="auto">Autos de Infrações</label>
                <textarea id="auto" onfocus="aoClicarOb()" onblur="aoSairOb()" class="form-control" name="auto" rows="1" data-length="120" placeholder="A 00000000 TE0000000 R 00000000" style="text-transform: uppercase" ></textarea>
            </div>
            <!-- CAMPO ARTIGO -->
            <div class="form-group col-md-2">
                <label for="artigo">Artigo</label>
                <input type="text" onblur="pegarPorJson()" class="form-control" name="artigo" id="artigo" required placeholder="Art. 195" maxlength="20" style="text-transform: uppercase" />
            </div>
            <!-- CAMPO CODIGO INFRAÇÃO -->
            <div class="form-group col-md-1">
                <label for="codigoinfra">Cod. Infra.</label>
                <input type="text" class="form-control" name="codigoinfra" id="codigoinfra" size="7" maxlength="14" required placeholder="000-0" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO PENALIDADE -->
            <div class="form-group col-md-12">
                <label for="penalidade">Penalidade</label>
                <textarea name="penalidade" id="penalidade" onfocus="aoClicarOb4()" onblur="aoSairOb4()" class="form-control" name="penalidade" rows="1" data-length="120" placeholder="Artigo 169" style="text-transform: uppercase" ></textarea>
            </div>
            <!-- CAMPO MODELO VEICULO -->
            <div class="form-group col-md-5">
                <label for="vaiculo_modelo">Modelo Veículo</label>
                <input type="text" class="form-control" name="	veiculo_modelo" id="	veiculo_modelo" placeholder="Modelo Veículo" style="text-transform: uppercase" />
            </div>
            <!-- CAMPO COR -->
            <div class="form-group col-md-3">
                <label for="cor">Cor</label>
                <input type="text" class="form-control" name="cor" id="cor" required placeholder="Cor do Veículo" style="text-transform: uppercase" />
            </div>
            <!-- CAMPO ANO DE FABRICAÇÃO -->
            <div class="form-group col-md-1">
                <label for="ano_fab">Ano Fab.</label>
                <input type="number" class="form-control" maxlength="4" name="ano_fab" id="ano_fab" required placeholder="1999" style="text-transform: uppercase" />
            </div>
            <!-- CAMPO OPERADOR -->
            <div class="form-group col-md-3">
                <label for="operador">Operador</label>
                <input type="text" class="form-control" value="<?php echo $log[0]; ?>" name="operador" id="operador" size="100" maxlength="100" placeholder="Operador" style="text-transform: uppercase" value="Operador" readonly="readonly" />
            </div>
            <!-- CAMPO DOS FATOS -->
            <div class="form-row col-md-12">
                <label for="fato">Dos Fatos</label>
                <textarea id="fato" onfocus="aoClicarOb2()" onblur="aoSairOb2()" class="form-control" name="fato" rows="1" data-length="120" placeholder="Dos fatos" style="text-transform: uppercase" ></textarea>
                <a href="javascript:;" onclick="editar()" class="btn-sm btn-outline-success">Buscar Padrões</a>
            </div>
            <!-- CAMPO DO MERITO -->
            <div class="form-group col-md-12">
                <label for="merito">Dos Mérito</label>
                <textarea id="merito" onfocus="aoClicarOb3()" onblur="aoSairOb3()" class="form-control" name="merito" rows="1" data-length="120" placeholder="Do Mérito" style="text-transform: uppercase" ></textarea>
                <a href="javascript:;" onclick="editar()" class="btn-sm btn-outline-success">Buscar Padrões</a>
            </div>
            <!-- CAMPO DO DECISÃO -->
            <div class="form-group col-md-12">
                <label for="">Status</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1"><h5>
                    Deferido 
                </h5></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2"><h5>
                    Indeferido
                </h5></label>
            </div>
            <!-- BOTÕES -->
            <p class="col-12"></p>
            <div class="">
                <input id="zer" type="submit" value="Cadastrar" class="btn btn-primary" >
                <input type="reset" class="btn btn-primary" value="Limpar">
            </div>
        </div>
    </form>
    <div id="modal" class="modal fade" role="dialog" >
        <div class="modal-dialog" >
            <div class="modal-content" >
                <div class="modal-body" ></div>
            </div>
        </div>
    </div>
</div>