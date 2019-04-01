<?php
class buscarProcessoController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('buscarProcesso', $dados);
		if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
			
		} else {
			$this->loadTemplate('login', $dados);
		}
		$this->loadTemplate('buscarProcesso', $dados);
	}
}