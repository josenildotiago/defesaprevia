<?php
class buscarProcessoController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('buscarProcesso', $dados);
		if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
			$this->loadTemplate('buscarProcesso', $dados);
		} else {
			$this->loadTemplate('login', $dados);
		}
	}
}