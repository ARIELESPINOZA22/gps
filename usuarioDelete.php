<?php

include("conexion.php");

$cod_usuario=$_GET['id'];

$sql="DELETE FROM usuarios WHERE idUsuario='$cod_usuario'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: usuarioCrud.php");
    }
?>
