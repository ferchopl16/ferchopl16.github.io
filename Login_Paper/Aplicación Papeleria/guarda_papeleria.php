<?php
	
	require 'conexion_papeleria.php';
	
	$nomproduct = $mysqli->real_escape_string($_POST['nomproduct']);
	$varid = $mysqli->real_escape_string($_POST['varid']);
	$marca = $mysqli->real_escape_string($_POST['marca']);
	$precio = $mysqli->real_escape_string($_POST['precio']);
	
	$sql = "INSERT INTO productosreal (Nombre, ID, Marca, Precio, Activo) VALUES ('$nomproduct', '$varid', '$marca', '$precio', 1)";
	//echo $sql;
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO AGREGADO';
		
		} else {
		echo 'ERROR AL AGREGAR REGISTRO';
	}
	
	echo "<br/><a href='index_papeleria.php' class='btn btn-primary'>Regresar</a>";
	
?>

