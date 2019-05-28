<?php
class mensagem_defController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('home', $dados);
		if (isset($_SESSION['painel'])) {
			$this->loadTemplate('mensagem_def', $dados);
        }else {
            header(BASE_URL."login");
        }
    }
}