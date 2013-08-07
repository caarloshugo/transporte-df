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
		
		if(isset($_POST["text_search"]) and $_POST["text_search"] != "") {
			$text_search  = strtolower($_POST["text_search"]);
			$text_search  = str_replace(" ", "+", $text_search);
			$text_search  = removeAcute($text_search);
			
			$vars["search"]   = true;
			$vars["metrobus"] = $this->Api_Model->getStopsBySearchByAgency("MB", $text_search);
			$vars["metro"] 	  = $this->Api_Model->getStopsBySearchByAgency("METRO", $text_search);
			$vars["rtp"] 	  = $this->Api_Model->getStopsBySearchByAgency("RTP", $text_search);
			$vars["ste"] 	  = $this->Api_Model->getStopsBySearchByAgency("STE", $text_search);
			$vars["sub"] 	  = $this->Api_Model->getStopsBySearchByAgency("SUB", $text_search);
		} else {
			$vars["search"]   = false;
			$vars["metrobus"] = $this->Api_Model->getStopsByAgency("MB");
			$vars["metro"] 	  = $this->Api_Model->getStopsByAgency("METRO");
			$vars["rtp"] 	  = $this->Api_Model->getStopsByAgency("RTP");
			$vars["ste"] 	  = $this->Api_Model->getStopsByAgency("STE");
			$vars["sub"] 	  = $this->Api_Model->getStopsByAgency("SUB");
		}

		$this->render("content", $vars);
	}
	
	
	/*Search near stop lat,lng*/
	public function near($ll) {
		if($ll !== "") {
			$array = explode("," , $ll);
			
			if(count($array) == 2) {
				$lon   = $array[0];
				$lat   = $array[1];
				$stops = $this->Api_Model->getNearStops($lon, $lat);
				
				if(!$stops) {
					$vars["stops"] = false;
				} else {				
					$vars = $stops;
				}
			} else {
				$vars["stops"] = false;
			}
		} else {
			$vars["stops"] = false;
		}
		
		echo json_encode($vars);
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
		$vars["agency"] = $this->Api_Model->getAgency($idAgency);
		$vars["routes"] = $this->Api_Model->getRoutes($idAgency);
		
		echo json_encode($vars);
	}
	
	public function route($idRoute) {
		$vars["route"]  = $this->Api_Model->getRoute($idRoute);
		$vars["agency"] = $this->Api_Model->getAgency($vars["route"][0]["agency_id"]);
		
		echo json_encode($vars);
	}
	
	
	
	/*Stops*/
	public function stops($idRoute) {
		$vars["route"]  = $this->Api_Model->getRoute($idRoute);
		$vars["stops"]  = $this->Api_Model->getStops($idRoute);
		$vars["agency"] = $this->Api_Model->getAgency($vars["route"][0]["agency_id"]);
		
		echo json_encode($vars);
	}
	
	public function stop($idStop) {
		$vars["stop"]   = $this->Api_Model->getStop($idStop);
		$vars["route"]  = $this->Api_Model->getRoute($vars["stop"][0]["route_id"]);
		$vars["agency"] = $this->Api_Model->getAgency($vars["route"][0]["agency_id"]);
		
		echo json_encode($vars);
	}
	
	public function stopsByAgency($idAgency) {
		$vars["agency"] = $this->Api_Model->getAgency($idAgency);
		$vars["routes"] = $this->Api_Model->getStopsByAgency($idAgency);
		
		echo json_encode($vars);
	}
	
	public function search($text_search = "") {
		if($text_search !== "") {
			$text  = urldecode($text_search);
			$text  = strtolower($text);
			$text  = str_replace(" ", "+", $text);
			$text  = removeAcute($text);				
			$stops = $this->Api_Model->getStopsBySearch($text);
			
			if(!$stops) {
				$vars["stops"] = false;
			} else {				
				$vars = $stops;
			}
		} else {
			$vars["stops"] = false;
		}
		
		echo json_encode($vars);
	}
}
