<?php
	
	require 'conexion_papeleria.php';
	
	$id = $mysqli->real_escape_string($_GET['id']);
	
	$sql = "SELECT Nombre, ID, Marca, Precio FROM productosreal WHERE id=$id LIMIT 1";
	$resultado = $mysqli->query($sql);
	
	$fila = $resultado->fetch_assoc();
	
?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>SISTEMA</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>PAPELERÍA</h1>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<form id="registro" name="registro" method="POST" action="editar2_papeleria.php" autocomplete="off">
						<div class="form-group">
							<label for="nomproduct">Nombre del producto</label>
							<input type="string" class="form-control" id="nomproduct" name="nomproduct" placeholder="Ingrese el nombre del producto" value="<?php echo $fila['Nombre']; ?>"autofocus required>
							<input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
						</div>
						
						<div class="form-group">
							<label for="varid">ID</label>
							<input type="number" class="form-control" id="varid" name="varid" placeholder="Ingrese el ID del producto" value="<?php echo $fila['ID']; ?>"required>
						</div>
						
						<div class="form-group">
							<label for="marca">Marca</label>
							<input type="string" class="form-control" id="marca" name="marca" value="<?php echo $fila['Marca']; ?>" placeholder="Ingrese la marca del producto" required>
						</div>
						
							<div class="form-group">
							<label for="precio">Precio</label>
							<input type="number" class="form-control" id="precio" name="precio" value="<?php echo $fila['Precio']; ?>" placeholder="Ingrese el precio del producto" required>
						</div>

						<div class="form-group">
							<button class="btn btn-primary" id="guarda" name="guarda" type="submit">Guardar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				