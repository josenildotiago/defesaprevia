<?php
class processosOrdemController extends controller {

	public function index() {
		$dados = array();
		if (isset($_SESSION['login']) && !empty($_SESSION['login']) or isset($_SESSION['painel'])) {
			$this->loadTemplate('processosOrdem', $dados);
		} else {
			$this->loadTemplate('login', $dados);
		}
	}
}