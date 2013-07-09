<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Default_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
	
		$this->table = "variablesi";
	}
	
	public function getIndices($estado, $type = "p") {
		$query = "select Indicador, Value, Description, " . $estado . " from indice  where Type='" . $type . "';";
		$result  = $this->Db->query($query);
		
		$data["desc"]  = $result[0]["Description"];
		$data["extra"] = $result[0]["Value"];
		$data["color"] = $this->color($this->convert($result[0][$estado]), $type);
		$data["level"] = 1;
		$data["value"] = $this->convert($result[0][$estado]);
		
		return $data;
	}
	
	public function getVariablesP($estado, $type = "p") {
		$query 	= "select Indicador, Value, Description, " . $estado . " from variablesp where Type='" . $type . "';";
		$result = $this->Db->query($query);
		
		foreach($result as $value) {
			$data[$value["Indicador"]]["desc"]  = $value["Description"];
			$data[$value["Indicador"]]["extra"] = $value["Value"];
			$data[$value["Indicador"]]["color"] = $this->color($this->convert($value[$estado]), $type);
			$data[$value["Indicador"]]["level"] = 2;
			$data[$value["Indicador"]]["value"] = $this->convert($value[$estado]);
		}
		
		return $data;
	}
	
	public function getVariablesI($estado, $type = "p") {
		$query  = "select Indicador, Value,Description, " . $estado . " from variablesi where Type='" . $type . "';";
		$result = $this->Db->query($query);
		
		foreach($result as $value) {
			$data[$value["Indicador"]]["extra"] = $value["Value"];
			$data[$value["Indicador"]]["desc"]  = $value["Description"];
			$data[$value["Indicador"]]["color"] = $this->color($this->convert($value[$estado]), $type);
			$data[$value["Indicador"]]["level"] = 3;
			$data[$value["Indicador"]]["value"] = $this->convert($value[$estado]);
		}
		
		return $data;
	}
	
	public function getIndicadores($estado, $type = "p") {
		$query  = "select Indicador, Value,Description, " . $estado . " from indicadores where Type='" . $type . "';";
		$result = $this->Db->query($query);

		foreach($result as $value) {
			$data[$value["Indicador"]]["extra"] = $value["Value"];
			$data[$value["Indicador"]]["desc"]  = $value["Description"];
			$data[$value["Indicador"]]["color"] = $this->color($this->convert($value[$estado]), $type);
			$data[$value["Indicador"]]["level"] = 4;
			$data[$value["Indicador"]]["value"] = $this->convert($value[$estado]);
		}
		
		return $data;
	}
	
	public function convert($data) {
		$number = substr($data * 10, 0, 3);
		
		if(strlen($number) == 1) {
			$number = $number . ".0";
		}
		
		return $number;
	}
	
	public function color($value, $type = "p") {
		if($type=="p") {
			/*0 - 5.5	5.6 - 6.3	6.4 - 6.9	7 - 8.0	8.1 a 10*/
			if($value>=8.1 and $value<=10)  return "#388652";
			if($value>=7   and $value<=8)   return "#79c452";
			if($value>=6.4 and $value<=6.9) return "#ebd06e";
			if($value>=5.6 and $value<=6.3) return "#df6c4f";
			if($value>=0   and $value<=5.5) return "#de2b33";
		} else {
			/* 0 - 6.8	6.9 - 7.6	7.7 a 7.9	8 a 9	9 a 10 */
			if($value>=9   and $value<=10)  return "#388652";
			if($value>=8   and $value<=8.99) return "#79c452";
			if($value>=7.7 and $value<=7.99) return "#ebd06e";
			if($value>=6.9 and $value<=7.69) return "#df6c4f";
			if($value>=0   and $value<=6.89) return "#de2b33";
		}
		
		return "#ccc";
	}
	
	public function color2($value, $type = "p") {
		if($value>=9 and $value<=10)  return "#79c452";
		if($value>=8 and $value<=8.9) return "#388652";
		if($value>=7 and $value<=7.9) return "#ebd06e";
		if($value>=6 and $value<=6.9) return "#df6c4f";
		if($value>=0 and $value<=5.9) return "#de2b33";
		
		return "#ccc";
		
		/*
		0 a 5.99
		6.00 a 6.99
		7.00 a 7.99
		8.00 a 8.99
		9 a 10
		*/
	}
}
