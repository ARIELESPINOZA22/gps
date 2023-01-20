<?php

include("conexion.php");

$cod_ciudad=$_POST['idCiudad'];
$nombre=$_POST['nombre'];

$sql="UPDATE ciudad SET  nombre='$nombre' WHERE idCiudad='$cod_ciudad'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: ciudades.php");
    }
?>