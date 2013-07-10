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
	
	
	/*Agencies*/
	public function getAgencies() {
		$query = "select * from agency";
		$data  = $this->Db->query($query);
		
		if(!$data) return false;
		
		foreach($data as $key=> $value) {
			$data[$key]["agency_name"] = utf8_decode($value["agency_name"]);
		}
		
		return $data;
	}
	
	public function getAgency($idAgency) {
		$query = "select * from agency where agency_id='" . $idAgency . "'";
		$data  = $this->Db->query($query);
		
		if(!$data) return false;
		
		foreach($data as $key=> $value) {
			$data[$key]["agency_name"] = utf8_decode($value["agency_name"]);
		}
		
		return $data;
	}
		
	
	
	/*Routes*/
	public function getRoutes($idAgency) {
		$query = "select * from routes where agency_id='" . $idAgency . "'";
		$data  = $this->Db->query($query);
		
		if(!$data) return false;
		
		foreach($data as $key=> $value) {
			$data[$key]["route_short_name"] = utf8_decode($value["route_short_name"]);
			$data[$key]["route_long_name"]  = utf8_decode($value["route_long_name"]);
			$data[$key]["route_desc"] 	    = utf8_decode($value["route_desc"]);
		}
		
		return $data;
	}
	
	public function getRoute($idRoute) {
		$query = "select * from routes where route_id='" . $idRoute . "'";
		$data  = $this->Db->query($query);
		
		if(!$data) return false;
		
		foreach($data as $key=> $value) {
			$data[$key]["route_short_name"] = utf8_decode($value["route_short_name"]);
			$data[$key]["route_long_name"]  = utf8_decode($value["route_long_name"]);
			$data[$key]["route_desc"] 	    = utf8_decode($value["route_desc"]);
		}
		
		return $data;
	}
	
	
	
	/*Stops*/
	public function getStops($idRoute) {
		$query = "select * from stops where route_id='" . $idRoute . "'";
		$query = "select stops.*,to_stop_id from stops left join transfers on stop_id=from_stop_id where route_id='" . $idRoute . "'";
		
		$data  = $this->Db->query($query);
		
		if(!$data) return false;
		
		foreach($data as $key=> $value) {
			$data[$key]["stop_name"] = utf8_decode($value["stop_name"]);
			$data[$key]["stop_desc"] = utf8_decode($value["stop_desc"]);
		}
		
		return $data;
	}
	
	public function getStop($idStop) {
		$query = "select * from stops where stop_id='" . $idStop . "'";
		$data  = $this->Db->query($query);
		
		if(!$data) return false;
		
		foreach($data as $key=> $value) {
			$data[$key]["stop_name"] = utf8_decode($value["stop_name"]);
			$data[$key]["stop_desc"] = utf8_decode($value["stop_desc"]);
		}
		
		return $data;
	}
	
	public function getStopsByAgency($idAgency) {
		$query = "select * from routes where agency_id='" . $idAgency . "'";
		$data  = $this->Db->query($query);
		
		if(!$data) return false;
		
		foreach($data as $key => $result) {
			$query = "select stops.*,to_stop_id from stops left join transfers on stop_id=from_stop_id where route_id='" . $result["route_id"] . "'";
			$data[$key]["stops"][] = $this->Db->query($query);
			
			foreach($data[$key]["stops"] as $key2 => $value) {
				$data[$key]["stops"][$key2]["stop_name"] = utf8_decode($value["stop_name"]);
				$data[$key]["stops"][$key2]["stop_desc"] = utf8_decode($value["stop_desc"]);
			}
		}
		
		die(var_dump($data));
		
		return $data;
	}
}
