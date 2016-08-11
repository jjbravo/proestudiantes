<?php namespace Models;
	class Estudiantes{
		private $id;
		private $nombre;
		private $edad;
		private $promedio;
		private $imagen;
		private $fk_curso;
		private $fecha;
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
			$sql="SELECT t1.*, t2.nombre as nombre_curso, t2.id as id_curso FROM estudiantes t1 INNER JOIN cursos t2 ON t1.fk_curso=t2.id";
			$datos=$this->con->queryObjects($sql);
			return $datos;
		}

		public function add(){
			$sql="INSERT INTO estudiantes VALUES (null,'{$this->nombre}','{$this->edad}','{$this->promedio}','{$this->imagen}',NOW(),'{$this->fk_curso}')";
			$this->con->querySet($sql);
				
		}

		public function delete(){
			$sql="DELETE FROM estudiantes WHERE id='{$this->id}'";
			$this->con->querySet($sql);

		}
		public function edit(){
			$sql="UPDATE estudiantes SET nombre='{$this->nombre}', edad='{$this->edad}', promedio='{$this->promedio}', imagen='{$this->imagen}', fk_curso='{$this->fk_curso}' WHERE id='{$this->id}'";
			$this->con->querySet($sql);
		}
		public function view(){
			$sql="SELECT t1.*, t2.nombre as nombre_curso, t2.id as id_curso FROM estudiantes t1 INNER JOIN cursos t2
			ON t1.fk_curso=t2.id WHERE t1.id='{$this->id}'";
			$datos=$this->con->queryObjects($sql);
			$row=mysqli_fetch_assoc($datos);
			return $row;
		}
	}

 ?>