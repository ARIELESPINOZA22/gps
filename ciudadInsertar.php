<?php
include_once("conexion.php");


$cod_ciudad=$_POST['idCiudad'];
$nombre=$_POST['nombre'];


$sql="INSERT INTO ciudad VALUES('$cod_ciudad','$nombre')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location: ciudades.php");
    
}else {
}
?>