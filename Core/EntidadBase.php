<?php
	class EntidadBase{
		private $table;
		private $db;
		private $conectar;

		public function __constructor($table, $adapter){
			$this->table=(string) $table;
			$this->conectar = null;
			$this->db = $adapter;
		}
		
		public function getConectar(){
			return $this->conectar;

		public function db(){
			return $this->db;
		}
		\\LUEGO VIENEN TODOS LOS MÉTODOS SQL QUE SE NOS OCURRAN

		public function getById($id){
			$query=$this->db->query("SELECT * FROM $this->table WHERE id=$id");
			if($row = $query->fetch_object()){
				$resultSet=$row;
			}
			return $resultSet;
		}

		public function getBy($column, $value){
			$query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
			while($row = $query->fetch_object()){
				$resultSet[]=$row;
			}
			return $resultSet;
		}

		public function deleteById($id){
			$query=$this->db->query("DELETE FROM $this->table WHERE id=$id");
			return $query;
		}

		public function deletedBy($column, $value){
			$query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'");
			return $query;
		}

	}
?