<?php
include_once("conexion.php");


$cod_tipo=$_POST['idTipoUsuario'];
$nombre=$_POST['nombre'];


$sql="INSERT INTO tipousuario VALUES('$cod_tipo','$nombre')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location: tipos.php");
    
}else {
}
?>