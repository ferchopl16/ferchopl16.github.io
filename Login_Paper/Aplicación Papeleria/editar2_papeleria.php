<?php
	
	require 'conexion_papeleria.php';
	
	$nomproduct = $mysqli->real_escape_string($_POST['nomproduct']);
	$varid = $mysqli->real_escape_string($_POST['varid']);
	$marca = $mysqli->real_escape_string($_POST['marca']);
	$precio = $mysqli->real_escape_string($_POST['precio']);
	
	$sql = "UPDATE productosreal SET Nombre='$nomproduct', Marca='$marca', Precio='$precio' WHERE ID=$varid";
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO MODIFICADO';
		} else {
		echo 'ERROR AL MODIFICAR REGISTRO';
	}
	
	echo "<br/><a href='index_papeleria.php' class='btn btn-primary'>Regresar</a>";
?>