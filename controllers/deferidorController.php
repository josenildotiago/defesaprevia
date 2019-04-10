<?php
class deferidorController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('buscarNome', $dados);
		$this->loadTemplate('deferidor', $dados);
	}
}