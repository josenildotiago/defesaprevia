<?php
class modalController extends controller {

	public function index() {
        $dados = array();
        
		$this->loadTemplate('modal', $dados);
  }
}
