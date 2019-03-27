<?php
class esqueciasenhaController extends controller {

	public function index() {
		$dados = array();
		$this->loadTemplate('esqueciasenha', $dados);

	}

}