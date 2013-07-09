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
		
		$this->var_internas    = array("A", "B", "C", "D", "E", "F", "G", "H", "I");
		$this->var_principales = array("1", "2", "3");
		$this->estados = array("Aguascalientes","BC","BCS","Campeche","Chiapas","Chihuahua","Coahuila","Colima","DF","Durango","Mexico","Guanajuato","Guerrero","Hidalgo","Jalisco","Michoacan","Morelos","Nayarit","NL","Oaxaca","Puebla","Queretaro","QR","SLP","Sinaloa","Sonora","Tabasco","Tamaulipas","Tlaxcala","Veracruz","Yucatan","Zacatecas", "Federal", "Nacional");
		$this->claves  = array("01","02","03","04","07","08","05","06","09","10","15","11","12","13","14","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32");
		$this->id_estados = array("aguascalientes","bcn","bcs","campeche","chiapas","chihuahua","coahuila","colima","df","durango","edo_mexico","guanajuato","guerrero","hidalgo","jalisco","michoacan","morelos","nayarit","nuevo_leon","oaxaca","puebla","queretaro","quntana_roo","slp","sinaloa","sonora","tabasco","tamaulipas","tlaxcala","veracruz","yucatan","zacatecas", "federal", "Estado");
		$this->fichas     = array("ags","bc","bcs","campeche","chiapas","chihuahua","coahuila","colima","df","durango","edomex","guanajuato","guerrero","hidalgo","jalisco","michoacan","morelos","nayarit","nuevoleon","oaxaca","puebla","queretaro","quintanaroo","slp","sinaloa","sonora","tabasco","tamaulipas","tlaxcala","veracruz","yucatan","zacatecas", "federal", "nacional");
		
		/*
			var estados_abr = [ "AGS","BC","BCS","CAM","CHIS","CHIH","COA","COL",
			  "DF","DGO","MEX","GTO","GRO","HGO","JAL","MICH",
			  "MOR","NAY","NL","OAX","PUE","QUE","QROO","SLP",
			  "SIN","SON","TAB","TAMPS","TLAX","VER","YUC","ZAC" ]; 
		 
		*/
	}
	
	public function index() {
		$vars["view"] = $this->view("home", TRUE);
			
		$this->render("content", $vars);
	}
	
	public function estado() {
		if(segment(1) != "get") {
			$this->index();
		} else {
			$this->get(segment(2));
		}
	}
	
	public function get($estado) {
		if($estado and in_array($estado, $this->estados)) {
			$data["progresivo"]["indice"]     = $this->Default_Model->getIndices($estado);
			$data["progresivo"]["variablesp"] = $this->Default_Model->getVariablesP($estado);
			$data["progresivo"]["variablesi"] = $this->Default_Model->getVariablesI($estado);
			$data["progresivo"]["indicadores"] = $this->Default_Model->getIndicadores($estado);
			
			$data["base"]["indice"]     = $this->Default_Model->getIndices($estado, "b");
			$data["base"]["variablesp"] = $this->Default_Model->getVariablesP($estado, "b");
			$data["base"]["variablesi"] = $this->Default_Model->getVariablesI($estado, "b");
			$data["base"]["indicadores"] = $this->Default_Model->getIndicadores($estado, "b");
			
			$idkey = array_search($estado, $this->estados);
			$key   = $this->id_estados[$idkey];
			
			$response["ficha"]  = get("webURL") . "/docs/ficha_" . $this->fichas[$idkey] . ".pdf";
			$response["data"]   = $data;
			
			$response["indice"] = array(
				"progresivo" => $data["progresivo"]["indice"]["value"], 
				"base" => $data["base"]["indice"]["value"]
			);
			
			$response["key"]    = $key;
			
			echo json_encode($response);
		} else {
			echo "Bad Request";
		}
	}
}
