<h1>Editar Estudiante</h1>


 <div class="panel panel-success">
 	<div class="panel-heading">
 		<h3 class="panel-title">Editar <?= $datos['nombre'] ?> </h3>
 	</div>
 	<div class="panel-body">
 		<div class="col-md-3">
 			<img class="avatar-editar" src="<?php echo MEDIA; ?>/images/avatar/<?= $datos['imagen']?>" alt="<?= $datos['nombre']?>" title="<?= $datos['nombre']?>"> 
 		</div>
 		<div class="col-md-9">
 			
		 	  <table class="table table-striped table-hover">
		 	   
		 	   	<tbody>
		 	   		
		 	   		<tr><th>Nombres</th><td><?= $datos['nombre']?></td> </tr>
		 	   		<tr><th>Edad</th><td><?= $datos['edad']?></td></tr>
		 	   		<tr><th>Promedio</th><td><?= $datos['promedio']?></td></tr>
		 	   		<tr><th>Curso</th><td><?= $datos['nombre_curso']?></td></tr>
		 	   		<tr><th>Fecha</th><td><?= $datos['fecha']?></td></tr>
		 	   			
		 	   			
		 	   		
		 	   			
		 	   		
		 	   	
		 	   	</tbody>
		 	   </table>
		 	<a class="btn btn-primary" href="<?php echo URL; ?>estudiantes/editar/<?= ['id']?>">Editar</a>
		 	<a class="btn btn-primary" href="<?php echo URL; ?>estudiantes/">Cancelar</a>

 		</div>
 	</div>
 </div>