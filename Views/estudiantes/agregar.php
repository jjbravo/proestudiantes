<h1>Agregar Estudiante</h1>


 <div class="panel panel-success">
 	<div class="panel-heading">
 		<h3 class="panel-title">Agregar estudiantes</h3>
 	</div>
 	<div class="panel-body">
 		
 	  <form role="form" action="" method="POST" enctype="multipart/form-data" >
 			<div class="form-group">
		 				
		 	  	<label for="nombre">Nombre</label>
		 	  	<input type="text" class="form-control" id="nombre" required name="nombre">

		 	  	<label for="edad">Edad</label>
		 	  	<input type="text" class="form-control" id="edad" required name="edad">

				<label for="promedio">Promedio</label>
		 	  	<input type="text" class="form-control" id="promedio" required name="promedio">

		 	  	
				<label for="curso">Curso</label>
				<select class="form-control"  name="fk_curso" id="curso">
					<option value="----">----</option>
					<?php while ($row=mysqli_fetch_array($datos)) { ?>
					<option value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
					<?php } ?>
				</select>

		 	  	<label for="imagen">imagen</label>
		 	  	<input class="btn btn-default" type="file" id="imagen" required name="imagen">
		 	  	<br>
		 	  	<input class="btn btn-primary" type="submit" value="Guardar">
		 	  	 <a class="btn btn-primary" href="<?php echo URL; ?>estudiantes">Cancelar</a>
 			</div>
 	  </form>
 	</div>
 </div>