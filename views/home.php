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
            <div class="form-group col-md-6">
                <label for="nome">Requerente</label>
                <input type="text" class="form-control" name="nome" size="74" maxlength="70" required autofocus placeholder="Nome Completo" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO DATA -->
            <div class="form-group col-md-2">
                <label for="nacimento">Placa</label>
                <input type="text" class="form-control" name="nacimento" id="data" size="7" maxlength="14" required placeholder="AAA-0000" style="text-transform: uppercase" >
            </div>
            <!-- CAMPO CPF -->
            <div class="form-group col-md-2">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" required placeholder="000.000.000-00" style="text-transform: uppercase" >
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
                <input type="text" class="form-control" value="" name="usuario" id="usuario" size="100" maxlength="100" required placeholder="Operador" style="text-transform: uppercase" value="<?php echo $_SESSION['nome'];?>" readonly="readonly" >
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