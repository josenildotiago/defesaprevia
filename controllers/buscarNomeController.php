<?php
class buscarNomeController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('buscarNome', $dados);
		if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
			
		} else {
			$this->loadTemplate('login', $dados);
		}
		$this->loadTemplate('buscarNome', $dados);
	}
}