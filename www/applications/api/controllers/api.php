<?php
/**
 * Access from index.php:
 */


class Api_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("api");
		
		$this->Templates = $this->core("Templates");
		$this->Api_Model = $this->model("Api_Model");
		
		$this->Templates->theme();
	}
	
	public function index() {
		echo "Api v1.0";
	}
	
	public function agencies() {
		$vars["agencies"] = $this->Api_Model->getAgencies();
		
		echo json_encode($vars);
	}
	
	public function routes($idAgency) {
		$vars["routes"] = $this->Api_Model->getRoutes($idAgency);
		
		echo json_encode($vars);
	}
	
	public function stops($idRoute) {
		$vars["stops"]   = $this->Api_Model->getStops($idRoute);
		$vars["route"]   = $this->Api_Model->getRoute($idRoute);
		die(var_dump($vars["route"]));
		
		$vars["agenciy"] = $this->Api_Model->getAgency($vars["route"]);
		
		echo json_encode($vars);
	}
}
