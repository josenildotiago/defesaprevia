<?php
class buscarNomeController extends controller {

	public function index() {
		$dados = array();
		$this->loadTemplate('buscarNome', $dados);

	}

}