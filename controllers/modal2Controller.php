<?php
class modal2Controller extends controller {

	public function index() {
        $dados = array();
        
		$this->loadTemplate('modal2', $dados);
    }
}