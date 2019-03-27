<?php
class loginController extends controller {

	public function index() {
        $dados = array();
        if (!isset($_SESSION['login']) && empty($_SESSION['login'])) {
            $this->loadTemplate('login', $dados);
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger text-center' role='alert'>Você já está logado!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
            $this->loadTemplate('home', $dados);
        }
		//$this->loadTemplate('login', $dados);
	}
}