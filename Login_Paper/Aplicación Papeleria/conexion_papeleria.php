<?php
	$mysqli = new mysqli("localhost", "root", "ferchopl16", "papeleria");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}		