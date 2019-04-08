<?php
class arquivoController extends controller {

	public function index() {
        $dados = array();
		$this->loadView('arquivo', $dados);
    }

    public function pdf(){
        
    }
}