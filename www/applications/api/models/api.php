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
	
	public function getAgencies() {
		$query = "select * from agency";
		$data  = $this->Db->query($query);
		
		foreach($data as $key=> $value) {
			die(var_dump($value));
			$data[$key]["name"] = utf8_decode($value["name"]);
		}
	}
}
