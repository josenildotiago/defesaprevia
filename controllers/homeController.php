<?php
class homeController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('home', $dados);
		if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
			$this->loadTemplate('home', $dados);
		} else {
			$this->loadTemplate('login', $dados);
		}
		
	}
}