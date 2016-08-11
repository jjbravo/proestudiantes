<h1>Eliminar Estudiante</h1>


 <div class="panel panel-success">
 	<div class="panel-heading">
 		<h3 class="panel-title">Eliminar <?= $datos['nombre'] ?> </h3>
 	</div>
 	<div class="panel-body">
 		<div class="alert alert-danger">
 			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 			<strong>Cuidado!!</strong> Se eliminara permanentemente el registro
 		</div>
 		<div class="col-md-3">
 			<img class="avatar-editar" src="<?php echo MEDIA; ?>/images/avatar/<?= $datos['imagen']?>" alt="<?= $datos['nombre']?>" title="<?= $datos['nombre']?>"> 
 		</div>
 		<div class="col-md-9">
 			<table class="table table-striped table-hover">
		 	   	<thead>
		 	   		<tr>
		 	   			
		 	   			<th>Nombres</th>
		 	   			<th>Edad</th>
		 	   			<th>Promedio</th>
		 	   			<th>Sección</th>
		 	   			<th>Fecha</th>
		 	   		</tr>
		 	   	</thead>
		 	   	<tbody>
		 	   		
		 	   		<tr>
		 	   			
		 	   			<td><?= $datos['nombre']?></td>
		 	   			<td><?= $datos['edad']?></td>
		 	   			<td><?= $datos['promedio']?></td>
		 	   			<td><?= $datos['nombre_curso']?></td>
		 	   			<td><?= $datos['fecha']?></td>
		 	   			
		 	   			
		 	   		</tr>
		 	   			
		 	   		
		 	   	
		 	   	</tbody>
		 	   </table>
		 	  <form role="form" action="" method="POST" enctype="multipart/form-data" >
		 			<input type="hidden" name="id" value="<?= $datos['id']?>">
				 	  	<input class="btn btn-danger" type="submit" value="Eliminar">
		 	   	   <a class="btn btn-primary" href="<?php echo URL; ?>estudiantes">Cancelar</a>
		 			
		 	  </form>

 		</div>
 	</div>
 </div>