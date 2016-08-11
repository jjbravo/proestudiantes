<?php namespace Models;

	class Cursos{
		private $id;
		private $nombre;
		private $estado;
		private $con;
		public function __construct(){
			$this->con=new Conexion();
		}
		public function set($atributo,$contenido){
			$this->$atributo=$contenido;
		}
		public function get($atributo){
			return $this->$atributo;
		}

		public function listar(){
			$sql="SELECT * FROM cursos";
			$datos=$this->con->queryObjects($sql);
			// var_dump($datos);
			return $datos;
		}
		public function add(){
			$sql="INSERT INTO cursos VALUES(null,'{$this->nombre}','{$this->estado}')";
			$this->con->querySet($sql);
		}
		public function delete(){
			$sql="DELETE cursos WHERE id='{$this->id}'";
			$this->con->querySet($sql);

		}
		public function edit(){
			$sql="UPDATE cursos SET nombre='{$this->nombre}', estado='{$this->estado}' WHERE id='{$this->id}'";
			$this->con->querySet($sql);
		}
		public function view(){
			$sql="SELECT * FROM cursos WHERE id='{$this->id}'";
			
			$datos=$this->con->queryObjects($sql);
			
			$row=mysqli_fetch_assoc($datos);
			return $row;
		}
	}

 ?>