<?php 
/*
.
├── Config
│   ├── Autoload.php
│   ├── Enrutador.php
│   └── Request.php
├── Controllers
│   ├── cursosController.php
│   ├── estudiantesController.php
│   ├── inicioController.php
│   └── loginController.php
├── index.php
├── media
│   └── images
│       └── avatar
│           ├── 14563614estudiante1.jpg
│           ├── 53511448men.jpg
│           └── 54193701estudiante3.jpg
├── Models
│   ├── Conexion.php
│   ├── Cursos.php
│   ├── Estudiantes.php
│   └── Login.php
└── Views
    ├── cursos
    │   ├── agregar.php
    │   └── index.php
    ├── estudiantes
    │   ├── agregar.php
    │   ├── editar.php
    │   ├── eliminar.php
    │   ├── index.php
    │   └── ver.php
    ├── index.php
    ├── inicio
    │   └── index.php
    ├── login
    │   └── index.php
    ├── static
    │   ├── css
    │   │   ├── bootstrap.min.css
    │   │   └── styles.css
    │   ├── images
    │   └── js
    │       ├── bootstrap.min.js
    │       └── jquery-1.11.3.min.js
    └── Template.php

*/
	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)) . DS);
	
	define('URL','http://localhost/cursophp/phpsenasoft/pro_estudiantes/');
	define('MEDIA','http://localhost/cursophp/phpsenasoft/pro_estudiantes/media');

	require_once "Config/Autoload.php";

	Config\Autoload::run();
	require_once "Views/Template.php";
	Config\Enrutador::run(new Config\Request());

	/*******************************/
	// phpinfo();				       //	
	/*******************************/
 ?>


