<?php

include("conexion.php");

$cod_pais=$_GET['id'];

$sql="DELETE FROM pais WHERE idPais='$cod_pais'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: paises.php");
    }
?>
