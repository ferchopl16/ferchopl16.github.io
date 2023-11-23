<?php
	
	require 'conexion_papeleria.php';
	
	$id = $mysqli->real_escape_string($_GET['id']);
	
	
	//$sql = "DELETE FROM empleados WHERE id=$id";
	$sql = "UPDATE productosreal SET activo=0 WHERE id=$id";
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO ELIMINADO';
		} else {
		echo 'ERROR AL ELIMINAR REGISTRO';
	}
	
	echo "<br/><a href='index_papeleria.php' class='btn btn-primary'>Regresar</a>";
	
?>

