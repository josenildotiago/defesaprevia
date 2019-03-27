<?php
class processosOrdemController extends controller {

	public function index() {
		$dados = array();
		$this->loadTemplate('processosOrdem', $dados);

	}

}