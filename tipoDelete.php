<?php

include("conexion.php");

$cod_tipo=$_GET['id'];

$sql="DELETE FROM tipousuario WHERE idTipoUsuario='$cod_tipo'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: tipos.php");
    }
?>
