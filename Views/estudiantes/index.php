<?php if($_SESSION['session']){ ?>

<h1>Lista de estudiantes test</h1>



 <div class="panel panel-success">
 	<div class="panel-heading">
 		<h3 class="panel-title">Lista de estudiantes</h3>
 	</div>
 	<div class="panel-body">
 	   <table class="table table-striped table-hover">
 	   	<thead>
 	   		<tr>
 	   			<th>Imagen</th>
 	   			<th>Nombres</th>
 	   			<th>Edad</th>
 	   			<th>Promedio</th>
 	   			<th>Curso</th>
 	   			<th>Fecha</th>
 	   			<th>Acción</th>
 	   		</tr>
 	   	</thead>
 	   	<tbody>
 	   		<?php while ($row=mysqli_fetch_array($datos)) { ?>
 	   		<tr>
 	   			<td><img class="avatar" src="<?php echo MEDIA; ?>/images/avatar/<?= $row['imagen']?>" alt="<?= $row['nombre']?>" title="<?= $row['nombre']?>"> </td>
 	   			<td><a href="<?php echo URL; ?>estudiantes/ver/<?= $row['id'] ?>"><?= $row['nombre']?></a></td>
 	   			<td><?= $row['edad']?></td>
 	   			<td><?= $row['promedio']?></td>
 	   			<td><?= $row['nombre_curso']?></td>
 	   			<td><?= $row['fecha']?></td>
 	   			<td><a class="btn btn-primary " href="<?php echo URL; ?>estudiantes/editar/<?= $row['id']?>">Editar</a></td>
 	   			<td><a class="btn btn-danger " href="<?php echo URL; ?>estudiantes/eliminar/<?= $row['id']?>">Eliminar</a></td>

 	   		</tr>

 	   		<?php } ?>

 	   	</tbody>
 	   </table>
 	   <a class="btn btn-primary" href="<?php echo URL; ?>estudiantes/agregar">Nuevo estudiante</a>

 	</div>
 </div>

<?php }else{ ?>
<h2>No tienes permisos para ver este contenido</h2>
<?php } ?>
