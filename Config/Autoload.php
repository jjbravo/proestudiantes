<?php namespace Config;
	class Autoload{
		public static function run(){
			spl_autoload_register(function($class){
				$url=str_replace("\\", "/", $class).".php";
				 print $url;
				if(is_readable($url)){
					require_once $url;
				}else{
					echo "No se puede cargar el archivo o no existe<br>";
				}
			});
		}
	}
	
 ?>

 
 