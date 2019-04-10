<?php
class sairController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('sair', $dados);

    }
    
    public function deslogar(){
        if (isset($_SESSION['login'])) {
        } elseif (isset($_SESSION['painel'])) {
            unset($_SESSION['painel']);
            unset($_SESSION['login']);
            header("Location: ".BASE_URL);
            exit;
        } else {
            header("Location: ".BASE_URL);
            exit;
        }
        unset($_SESSION['login']);
        unset($_SESSION['painel']);
        unset($_SESSION['nomelogado']);
        header("Location: ".BASE_URL);
        exit;
    }

}