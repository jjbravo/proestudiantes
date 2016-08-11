
<h1>Agregar Curso</h1>

<?php 
	// $datos= $estudiantes->index();
	
	
 ?>

	
 <div class="panel panel-success">
 	<div class="panel-heading">
 		<h3 class="panel-title">Agregar Curso</h3>
 	</div>
 	<div class="panel-body">
 		
 	  <form role="form" action="" method="POST" enctype="multipart/form-data" >
 			<div class="form-group">
		 				
		 	  	<label for="nombre">Nombre</label>
		 	  	<input type="text" class="form-control" id="nombre" required name="nombre">
		 	  	<label for="estado">Estado</label>

		 	
		 	  	<select class="form-control" id="estado" required name="estado" >
		 	  		<option value="1">Disponible</option>
		 	  		<option value="0" >No disponible</option>
		 	  	
		 	  	</select>
				<br>
		 	  
		 	  	<input class="btn btn-primary" type="submit" value="Guardar">
 			</div>
 	  </form>
 	</div>
 </div>
