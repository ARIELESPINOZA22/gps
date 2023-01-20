<?php

include("conexion.php");

$cod_ciudad=$_GET['id'];

$sql="DELETE FROM ciudad WHERE idciudad='$cod_ciudad'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: ciudades.php");
    }
?>
