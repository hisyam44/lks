<?php
	class Database extends mysqli{
		private $host;
		private $user;
		private $password;
		private $database;

		public function __construct(){
			$this->host = "localhost";
			$this->user = "root";
			$this->password = "";
			$this->database = "database";
			parent::__construct($this->host,$this->user,$this->password,$this->database);
		}

		public function select($rows,$table,$where = null){
			$query = "select ".$rows." from ".$table;
			if(!is_null($where)){
				$query .= " ".$where;
			}
			$result = parent::query($query);
			$final_result = [];
			while($array = $result->fetch_assoc()){
				$final_result[] = $array;
			}
			return $final_result;
		}

		public function insert($table,$data){
			$rows = "";
			$values = "";
			foreach ($data as $key => $value) {
				$rows .= ",".$key;
				$values .= ",'".$value."'";
			}
			$rows = "(".substr($rows, 1).")";
			$values = " values(".substr($values, 1).")";
			$query = "insert into ".$table.$rows.$values;
			$result = parent::query($query);
			return $result;
		}

		public function update($table,$data,$where){
			$query = "update ".$table." set ";
			$values = "";
			foreach ($data as $key => $value) {
				$values .= ", ".$key." = "."'".$value."'";
			}
			$query .= substr($values, 1)." where ".$where;
			$result = parent::query($query);
			return $result;
		}

		public function delete($table,$where){
			$query = "delete from ".$table." where ".$where;
			$result = parent::query($query);
			return $result; 
		}
	}

?>