<?php
class mensagemController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('home', $dados);
		if (isset($_SESSION['login']) || isset($_SESSION['painel'])) {
			$this->loadTemplate('mensagem', $dados);
		} else {
			$this->loadTemplate('login', $dados);
		}
  }
}