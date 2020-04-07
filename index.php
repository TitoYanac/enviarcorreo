<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formularioARGENPER</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<section class="d-flex align-items-center" style="height: 100vh; min-height: 500px;">
		<form method="post" action="controlador/correo.php" class="col-lg-5 m-auto p-5 align-middle border border-primary rounded" >
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="nombre">Name:</label>
		      <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="..."required>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="email">Email:</label>
		      <input type="email" class="form-control" name="correo" id="correo" placeholder="user@example.com" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="direccion">Direccion</label>
		    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="..." required>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="pais">País:</label>
		      <select name="pais" id="pais" class="form-control">
		        <option selected>--Selecciona--</option>
		        <option>Argentina</option>
		        <option>Bolivia</option>
		        <option>Brazil</option>
		        <option>Chile</option>
		        <option>Ecuador</option>
		        <option>Perú</option>
		        <option>Venezuela</option>
		      </select>
		    </div>

		    <div class="form-group col-md-6">
		      <label for="ciudad">Ciudad:</label>
		      <input type="text" class="form-control" name="ciudad" id="ciudad" required>
		    </div>

		    <div class="form-group col-md-2">
		      <label for="zip">Zip:</label>
		      <input type="text" class="form-control" name="zip" id="zip" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="gridCheck">
		      <label class="form-check-label" for="gridCheck">
		        Acepto que los datos serán compartidos con Argenper
		      </label>
		    </div>
		  </div>
		  <button type="submit" id="env" class="btn btn-primary" disabled>Enviar</button>
		</form>
	</section>
	<?php 

	?>
	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<script src="js/funciones.js"></script>
</body>
</html>