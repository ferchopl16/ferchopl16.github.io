<?php

$dbhost = "localhost";
$dbuser = "ferchopl16";
$dbpass = "";
$dbname = "papeleria";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
	die("No hay conexion:" .mysqli_connect_error());
}
?>