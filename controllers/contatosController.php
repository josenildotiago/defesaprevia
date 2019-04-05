<?php
class contatosController extends controller {

	public function index() {}

	public function login() {
		$dados = array();

		if(!empty($_GET['error'])) {
			$dados['error'] = $_GET['error'];
		}

		$this->loadTemplate('login', $dados);
	}

	public function logar() {
		if(!empty($_POST['email'])) {
			$email = $_POST['email'];
			$senha = $_POST['senha'];

            $contatos = new Contatos();
            if ($contatos->login($email, $senha)) {
                print_r($contatos);
                header("Location: ".BASE_URL);
            } else {
                header("Location: ".BASE_URL."login");
                echo "aqui no primeiro else";
                //header("Location: ".BASE_URL.'contatos/logar?error=exist');
            }
            
		
		} else {
			echo "aqui no segundo else";
		}
    }

    public function add_save() {
		echo "oi";
		header("Location: ".BASE_URL);
		if(!empty($_POST['email'])) {
			$nome = $_POST['nome'];
			$email = $_POST['email'];

			$contatos = new Contatos();
			if($contatos->add($nome, $email)) {
				header("Location: ".BASE_URL);
			} else {
				header("Location: ".BASE_URL.'contatos/add?error=exist');
			}			
		} else {
			header("Location: ".BASE_URL.'contatos/add');
		}
	}
}



















