<?php  namespace Controllers;

	use Models\Cursos as Cursos;
	class cursosController{
		private $cursos;
		public function __construct(){
			$this->cursos= new Cursos();
		}
		public function index(){
			// print "Hola, soy el index de Estudiantes Controller";
			$datos=$this->cursos->listar();
			// var_dump();
			return $datos;
		}

		public function agregar(){
			if($_POST){
				$this->cursos->set("nombre",$_POST['nombre']);
				$this->cursos->set("estado",$_POST['estado']);
				$this->cursos->add();
					header("Location: ".URL."cursos");
			}
		}
	}
 ?>