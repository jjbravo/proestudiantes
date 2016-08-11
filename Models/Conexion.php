<?php  namespace Models;

	class Conexion{
		private $datos = array(
			"host"=>"localhost",
			"user"=>"root",
			"pass"=>"1234",
			"db"=>"si_estudiantes"
		);
		private $con;
		public function __construct(){
			$this->con=new \mysqli(
				$this->datos['host'],
				$this->datos['user'],
				$this->datos['pass'],
				$this->datos['db']

				);
			
		}

		public function querySet($sql){
			$data=$this->con->query($sql);
			//print $data;
			// return $data;
		}
		public function queryObjects($sql){
			$datos=$this->con->query($sql);
			// var_dump($datos);
			return $datos;
		}
	}

 ?>

 