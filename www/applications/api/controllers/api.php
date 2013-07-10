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
		$vars["view"] = $this->view("home", TRUE);
			
		$this->render("content", $vars);
	}
	
	/*Agencies*/
	public function agencies() {
		$vars["agencies"] = $this->Api_Model->getAgencies();
		
		echo json_encode($vars);
	}
	
	public function agency($idAgency) {
		$vars["agency"] = $this->Api_Model->getAgency($idAgency);
		
		echo json_encode($vars);
	}
	
	
	/*Routes*/
	public function routes($idAgency) {
		$vars["routes"] = $this->Api_Model->getRoutes($idAgency);
		$vars["agency"] = $this->Api_Model->getAgency($idAgency);
		
		echo json_encode($vars);
	}
	
	public function route($idRoute) {
		$vars["route"]  = $this->Api_Model->getRoute($idRoute);
		$vars["agency"] = $this->Api_Model->getAgency($vars["route"][0]["agency_id"]);
		
		echo json_encode($vars);
	}
	
	
	
	/*Stops*/
	public function stops($idRoute) {
		$vars["stops"]  = $this->Api_Model->getStops($idRoute);
		$vars["route"]  = $this->Api_Model->getRoute($idRoute);
		$vars["agency"] = $this->Api_Model->getAgency($vars["route"][0]["agency_id"]);
		
		echo json_encode($vars);
	}
	
	public function stop($idStop) {
		$vars["stop"]   = $this->Api_Model->getStop($idStop);
		$vars["route"]  = $this->Api_Model->getRoute($vars["stop"][0]["route_id"]);
		$vars["agency"] = $this->Api_Model->getAgency($vars["route"][0]["agency_id"]);
		
		echo json_encode($vars);
	}
}
