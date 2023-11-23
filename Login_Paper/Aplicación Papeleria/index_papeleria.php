<?php
	
	require 'conexion_papeleria.php';
	
	$sql = "SELECT Nombre, ID, Marca, Precio FROM productosreal WHERE Activo=1";
	$resultado = $mysqli->query($sql);
	
?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>
		
		<title>SISTEM PAPER</title>
		
		<script>
			$(document).ready(function() {
			$('#tabla').DataTable();
			} );
			
		</script>
		
		<style>
			body {
			background: palegreen;
			text-align: center;
			}
		</style>
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<p><h1>SISTEMA DE PAPELERÍA</h1></p>
			</div>

			<div class="row">
				<a href="nuevo_papeleria.php" class="btn btn-primary">Registrar</a>
			</div>
			
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>NOMBRE</th>
						<th>ID</th>
						<th>MARCA</th>
						<th>$ PRECIO</th>
						<th>ACCIÓN 1</th>
						<th>ACCIÓN 2</th>
					</tr>
				</thead>
				<tbody>
					<?php while($fila = $resultado->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $fila['Nombre']; ?></td>
							<td><?php echo $fila['ID']; ?></td>
							<td><?php echo $fila['Marca']; ?></td>
							<td><?php echo $fila['Precio']; ?></td>
							<td><a href="editar_papeleria.php?id=<?php echo $fila['ID']; ?>" class="btn btn-warning">Editar</a> </td>
							<td><a href="eliminar_papeleria.php?id=<?php echo $fila['ID']; ?>" class="btn btn-danger">Eliminar</a> </td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>
	
</body>
</html>						