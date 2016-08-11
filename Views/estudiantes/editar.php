<?php $cursos= $estudiantes->listCursos();  ?>

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
 			
		 	  <form role="form" action="" method="POST" enctype="multipart/form-data" >
		 			<div class="form-group">
				 				
				 	  	<label for="nombre">Nombre</label>
				 	  	<input type="text" class="form-control" id="nombre" required name="nombre" value="<?= $datos['nombre'] ?>">

				 	  	<label for="edad">Edad</label>
				 	  	<input type="text" class="form-control" id="edad" required name="edad" value="<?= $datos['edad'] ?>">

						<label for="promedio">Promedio</label>
				 	  	<input type="text" class="form-control" id="promedio" required name="promedio" value="<?= $datos['promedio'] ?>">
				 	  
				 	  <input type="hidden" class="form-control" id="id" required name="id" value="<?= $datos['id'] ?>">
				 	  <input type="hidden" class="form-control" id="id" required name="avatar" value="<?= $datos['imagen'] ?>">

				 	  	
						<label for="curso">Curso</label>
						<select class="form-control"  name="fk_curso" id="curso" >
							<option value="<?= $datos['fk_curso'] ?>"><?= $datos['nombre_curso'] ?></option>
							<?php while ($row=mysqli_fetch_array($cursos)) { ?>
							<option value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
								
							<?php } ?>
						</select>

				 	  	<label for="imagen">imagen</label>
				 	  	 <input class="btn btn-default" type="file" id="imagen" name="imagen" value="value="<?= $datos['imagen'] ?>""> 
				 	  	<br>
				 	  	<input class="btn btn-primary" type="submit" value="Guardar">
		 				 <a class="btn btn-primary" href="<?php echo URL; ?>estudiantes">Cancelar</a>
		 			</div>
		 	  </form>
 		</div>
 	</div>
 </div>