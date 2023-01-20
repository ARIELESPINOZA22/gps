<?php

include("conexion.php");

$cod_tipo=$_POST['idTipoUsuario'];
$nombre=$_POST['nombre'];

$sql="UPDATE tipousuario SET  nombre='$nombre' WHERE idTipoUsuario='$cod_tipo'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: tipos.php");
    }
?>