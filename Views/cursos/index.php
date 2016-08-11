
<h1>Lista de Cursos</h1>

<?php 
	// $datos= $estudiantes->index();
	
	
 ?>

	
 <div class="panel panel-success">
 	<div class="panel-heading">
 		<h3 class="panel-title">Lista de Cursos</h3>
 	</div>
 	<div class="panel-body">
 	   <table class="table table-striped table-hover">
 	   	<thead>
 	   		<tr>
 	   			<th>id</th>
 	   			<th>Nombre</th>
 	   			<th>Estado</th>
 	   			<th>Acción</th>
 	   		</tr>
 	   	</thead>
 	   	<tbody>
 	   		<?php while ($row=mysqli_fetch_array($datos)) { ?>
 	   		<tr>
 	   			<td><?= $row['id']?></td>
 	   			<td><?= $row['nombre']?></td>
 	   			<td><?php if($row['estado']){echo "Disponible";}else{echo "No disponible";}?></td>
 	   			<td><a class="btn btn-primary btn-xs" href="<?php echo URL; ?>cursos/editar/<?= $row['id']?>">Editar</a></td>
 	   			<td><a class="btn btn-warning btn-xs" href="<?php echo URL; ?>cursos/eliminar/<?= $row['id']?>">Eliminar</a></td>
 	   			
 	   		</tr>
 	   			
 	   		<?php } ?>
 	   	
 	   	</tbody>
 	   </table>
 	    	   <a class="btn btn-primary" href="<?php echo URL; ?>cursos/agregar">Nuevo estudiante</a>

 	</div>
 </div>
