<?php
class homeController extends controller {

	public function index() {
		$dados = array();
		//$this->loadTemplate('home', $dados);
		if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
			
		} else {
			$this->loadTemplate('login', $dados);
		}
		$this->loadTemplate('home', $dados);
	}
}