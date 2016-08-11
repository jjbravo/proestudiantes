<?php namespace Models;

	class Login{
		private $id;
		private $username;
		private $password;
		private $con;
		public function __construct(){
			$this->con=new Conexion();
		}
		public function set($atributo,$contenido){
			$this->$atributo=$contenido;
			// print $this->username;
		}
		public function get($atributo){
			return $this-$atributo;
		}

		public function login(){
			$pass=md5($this->password);
			$sql="SELECT username, password FROM usuarios WHERE username = '{$this->username}' AND password = '{$pass}'";
			$datos=$this->con->queryObjects($sql);
			return $datos;
		}	

	}




 ?>
  