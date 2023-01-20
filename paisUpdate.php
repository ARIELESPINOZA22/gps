<?php

include("conexion.php");

$cod_pais=$_POST['idPais'];
$nombre=$_POST['nombre'];

$sql="UPDATE pais SET  nombre='$nombre' WHERE idPais='$cod_pais'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: paises.php");
    }
?>