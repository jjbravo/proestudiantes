<?php  namespace Controllers;
 use Models\Estudiantes as Estudiantes;
 use Models\Cursos as Cursos;
	class estudiantesController{
		private $estudiante;
		private $cursos;
		public function __construct(){
			$this->estudiante= new Estudiantes();
			$this->cursos= new Cursos();
		}
		public function index(){
			$datos=$this->estudiante->listar();
			return $datos;
		}
		public function agregar(){	
			if(!$_POST){
				$datos=$this->cursos->listar();
				return $datos;
			}else{
				$permitidos=array("image/jpeg","image/png","image/gif","image/jpg");
				$limite=700;
				if(in_array($_FILES['imagen']['type'],$permitidos) && $_FILES['imagen']['size']<=$limite*1024){
					$avatar=date('is').$_FILES['imagen']['name'];
					$ruta= ROOT . "media" .DS. "images" .DS. "avatar" .DS. $avatar;
					print $ruta;
					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
					$this->estudiante->set("nombre",$_POST['nombre']);
					$this->estudiante->set("edad",$_POST['edad']);
					$this->estudiante->set("promedio",$_POST['promedio']);
					$this->estudiante->set("fk_curso",$_POST['fk_curso']);
					$this->estudiante->set("imagen",$avatar);
					$this->estudiante->add();
					header("Location: ".URL."estudiantes");
				}
			}
		}
		public function editar($id){
			if(!$_POST){
			$this->estudiante->set("id",$id);
			$datos=$this->estudiante->view();
			return $datos;
			}else{

				$permitidos=array("image/jpeg","image/png","image/gif","image/jpg");
				$limite=700;
				$avatar=$_POST['avatar'];
				if($_FILES){
					
					if(in_array($_FILES['imagen']['type'],$permitidos) && $_FILES['imagen']['size']<=$limite*1024){
						$ruta= ROOT . "media" .DS. "images" .DS. "avatar" .DS. $avatar;
						unlink($ruta);
						$avatar=date('is').$_FILES['imagen']['name'];
						$ruta= ROOT . "media" .DS. "images" .DS. "avatar" .DS. $avatar;
						move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
					}
				}
					$this->estudiante->set("imagen",$avatar);
					$this->estudiante->set("id",$_POST['id']);
					$this->estudiante->set("nombre",$_POST['nombre']);
					$this->estudiante->set("edad",$_POST['edad']);
					$this->estudiante->set("promedio",$_POST['promedio']);
					$this->estudiante->set("fk_curso",$_POST['fk_curso']);
					$this->estudiante->edit();
					header("Location: ".URL."estudiantes");
				 
			}
		}
		public function listCursos(){
			$datos=$this->cursos->listar();
			return $datos;
		}
		public function eliminar($id){
			if(!$_POST){
				$this->estudiante->set("id",$id);
				$datos=$this->estudiante->view();
				return $datos;
			}else{
				$this->estudiante->set("id",$_POST['id']);
				$this->estudiante->delete();

				header("Location: ".URL."estudiantes");
			}
		}
		public function ver($id){
			$this->estudiante->set("id",$id);
			$datos = $this->estudiante->view();
			return $datos;
		}
	}

	$estudiantes=new estudiantesController();
 ?>


 
 
   