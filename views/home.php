<?php
if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
    
} else {
    header("Location: ".BASE_URL."login");
}
?>
<div class="container theme-showcase" role="main" >
<?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); } ?>
    <p>&nbsp;</p>
    <div class="page-header"><h3>Cadastrando Registros</h3></div>
    <form action="<?php echo BASE_URL; ?>contatos/add_save" method="POST">
        <div class="form-row">
            <!-- CAMPO PROCESSO -->
            <div class="form-group col-md-2">
                <label for="processo">Processo</label>
                <input type="text" class="form-control" name="processo" id="processo" required placeholder="0000/0000" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO REQUERENTE -->
            <div class="form-group col-md-7">
                <label for="nome">Requerente</label>
                <input type="text" class="form-control" name="nome" size="74" maxlength="70" required autofocus placeholder="Nome Completo" style="text-transform: uppercase" >
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
            <!-- CAMPO CEP -->
            <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" required placeholder="00000-000" style="text-transform: uppercase" onblur="pesquisacep(this.value);" >
            </div>
            <!-- CAMPO LOGRADOURO -->
            <div class="form-group col-md-5">
                <label for="rua">Logradouro</label>
                <input type="text" class="form-control" name="rua" id="rua" required placeholder="Endereço" style="text-transform: uppercase"  >
            </div>
            <!-- CAMPO N° -->
            <div class="form-group col-md-1">
                <label for="numero">N°</label>
                <input type="text" class="form-control" name="numero" id="numero" required placeholder="N°" maxlength="10" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO BAIRRO -->
            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" style="text-transform: uppercase"  >
            </div>
            <!-- CAMPO CIDADE -->
            <div class="form-group col-md-5">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" value="MOSSORÓ" placeholder="Cidade" style="text-transform: uppercase"  />
            </div>
            <!-- CAMPO ESTADO -->
            <div class="form-group col-md-1">
                <label for="uf">Estado</label>
                <input type="text" class="form-control" name="uf" id="uf" size="2" value="RN" maxlength="2" placeholder="UF" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO IBGE -->
            <div class="form-group col-md-2">
                <label for="ibge">IBGE</label>
                <input type="text" class="form-control" name="ibge" id="ibge" size="15" maxlength="15" placeholder="IBGE" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO OPERADOR -->
            <div class="form-group col-md-4">
                <label for="usuario">Operador</label>
                <input type="text" class="form-control" value="" name="usuario" id="usuario" size="100" maxlength="100" required placeholder="Operador" style="text-transform: uppercase" value="Operador" readonly="readonly" >
            </div>
            <!-- CAMPO DATA NASCIMENTO -->
            <div class="form-group col-md-2">
                <label class="lab" for="saber">Data Nascimento</label>
                <input type="text" class="form-control" name="saber" id="age" style="text-transform: uppercase" placeholder="Data Nasc." maxlength="50" readonly="readonly" />
            </div>
            <!-- CAMPO IDS ANTIGO -->
            <div class="form-group col-md-2">
                <label for="numero">IDS Antigo</label>
                <input type="text" class="form-control" name="ids_ant" id="ids_ant" style="text-transform: uppercase" placeholder="IDS Antigo" maxlength="50" />
            </div>
            <!-- CAMPO OBSERVAÇÕES -->
            <div class="form-group col-md-8">
                <label for="obs">Observações</label>
                <textarea id="obs" onfocus="aoClicarOb()" onblur="aoSairOb()" class="form-control" name="obs" rows="1" data-length="120" placeholder="Observações" style="text-transform: uppercase" ></textarea>
            </div>
            <!-- BOTÕES -->
            <p class="col-12"></p>
            <div class="">
                <input id="zer" type="submit" value="Cadastrar" class="btn btn-primary" >
                <a href="../index.php" class="btn btn-primary">Voltar</a>
                <a href="../sair.php" class="btn btn-danger">Sair</a>
                <input type="reset" class="btn btn-primary" value="Limpar">
            </div>
        </div>
    </form>
</div>