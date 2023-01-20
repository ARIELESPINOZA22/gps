<?php
//Sample Database Connection Syntax for PHP and MySQL.

//Connect To Database

$hostname="localhost";
$username="root";
$password="";
$dbname="gps";

$conexion = mysqli_connect($hostname,$username, $password,$dbname) or die ("<html><script language='JavaScript'>alert('No se puede conectar a la BD! Intentarlo mas tarde por favor.'),history.go(-1)</script></html>");

?>
