<?php
class controller {

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		require 'views/template.php';
	}

	public function loadTemplateHome($viewName, $viewData = array()) {
		require 'views/template_home.php';
	}

	public function loadTemplate1($viewName, $viewData = array()) {
		require 'views/template1.php';
	}
	public function loadTemplate2($viewName, $viewData = array()) {
		require 'views/template2.php';
	}
	
	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

}