<?php
/**
 * Access from index.php:
 */


class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates     = $this->core("Templates");
		$this->Default_Model = $this->model("Default_Model");
		
		$this->Templates->theme();
	}
	
	public function index() {
		$agencies = $this->Default_Model->getAgencies();
		$vars["view"] = $this->view("home", TRUE);
			
		$this->render("content", $vars);
	}
}
