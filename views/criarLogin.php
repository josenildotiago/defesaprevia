<div class="container">
    <div class="form-row">
        <div class="container col-4" >
            <form class=""  method="POST" action="<?php echo BASE_URL; ?>criarLogin/cadastrar" >
                <h2 class="text-center">Cadastro Usuários</h2><br>
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" required placeholder="Dígite seu nome e sobrenome" >
                <label for="nome">CPF</label>
                <input class="form-control" type="text" name="cpf" id="cpf" required placeholder="Dígite seu CPF" >
                <label for="email">E-mail</label>
                <input class="form-control" type="text" name="email" required placeholder="Dígite seu email" >
                <label for="senha">Senha</label>
                <input class="form-control" type="password" name="senha" required placeholder="(min. de 6 caracteres)" >
                <label for="usuario">Usuário</label>
                <input class="form-control" type="text" name="usuario" required placeholder="Dígite seu usuario" >
                <label for="tipo">Tipo Usuários</label>
                <select required class="custom-select" name="tipo" id="tipo" >
                    <option value="0">Padrão</option>
                    <option value="1">Administrador</option>
                </select>
                <div></div><br><br>
                <input class="btn btn-lg btn-primary btn-block" type="submit" name="btnCadUsuario" value="Cadastrar">
                <a class="btn btn-lg btn-primary btn-block" href="<?php echo BASE_URL; ?>">Voltar</a>
                <a class="btn btn-lg btn-primary btn-block" href="<?php echo BASE_URL; ?>sair/deslogar">Sair</a>
            </form>
        </div>
    </div>
</div>