<?php
class criarLoginController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('buscarNome', $dados);
		if (isset($_SESSION['login']) && !empty($_SESSION['login']) or isset($_SESSION['painel'])) {
			$this->loadTemplate('criarLogin', $dados);
		} else {
			$this->loadTemplate('login', $dados);
		}
    }
    
    public function cadastrar(){
        if (isset($_POST['nome']) 
        && isset($_POST['cpf']) 
        && isset($_POST['email']) 
        && isset($_POST['senha'])
        && isset($_POST['usuario'])
        && isset($_POST['tipo'])) {
            $nome = addslashes($_POST['nome']);
            $cpf = addslashes($_POST['cpf']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $usuario = addslashes($_POST['usuario']);
            $tipo = addslashes($_POST['tipo']);

            $nome = mb_strtoupper($nome);
            $usuario = mb_strtoupper($usuario);

            $a = new Contatos();
            if ($a->addLogin($nome, $cpf, $email, $senha, $usuario, $tipo)) {
                $_SESSION['msg'] = "<div class='alert alert-success text-center' role='alert'>Usuario Adicionado com sucesso!
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
				header("Location: ".BASE_URL);
            } else {
                $_SESSION['msg'] = "<div class='alert alert-danger text-center' role='alert'>Não foi possivel inserir, CPF existente!
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
				header("Location: ".BASE_URL);
            }

        } else {
            echo "caiu no else";
        }
        
    }
}