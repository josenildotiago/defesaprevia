<?php
class buscarNomeController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('buscarNome', $dados);
		if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
			$this->loadTemplate('buscarNome', $dados);
		} else {
			$this->loadTemplate('login', $dados);
		}
	}
}