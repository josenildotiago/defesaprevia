<?php
class addController extends controller {

	public function index() {
        $dados = array();
        
		$this->loadTemplate('add', $dados);
    }
    public function add_save(){
        header("Location: ". BASE_URL);
    }
}