<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Api_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
	}
	
	public function index() {
		echo "Api v1.0";
	}
	
	public function getAgencies() {
		$query = "select * from agency";
		$data  = $this->Db->query($query);
		
		foreach($data as $key=> $value) {
			$data[$key]["agency_name"] = utf8_decode($value["agency_name"]);
		}
		
		return $data;
	}
	
	public function getRoutes($idAgency) {
		$query = "select * from routes where agency_id='" . $idAgency . "'";
		$data  = $this->Db->query($query);
		
		foreach($data as $key=> $value) {
			$data[$key]["route_short_name"] = utf8_decode($value["route_short_name"]);
			$data[$key]["route_long_name"]  = utf8_decode($value["route_long_name"]);
			$data[$key]["route_desc"] 	    = utf8_decode($value["route_desc"]);
		}
		
		return $data;
	}
	
	public function getStops($idRoute) {
		$query = "select * from stops where route_id='" . $idRoute . "'";
		$data  = $this->Db->query($query);
		
		foreach($data as $key=> $value) {
			$data[$key]["stop_name"] = utf8_decode($value["stop_name"]);
			$data[$key]["stop_desc"] = utf8_decode($value["stop_desc"]);
		}
		
		return $data;
	}
}
