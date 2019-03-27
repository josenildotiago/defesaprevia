<?php
class buscarProcessoController extends controller {

	public function index() {
		$dados = array();
		$this->loadTemplate('buscarProcesso', $dados);

	}

}