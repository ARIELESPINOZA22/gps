<?php
include_once("conexion.php");


$cod_pais=$_POST['idPais'];
$nombre=$_POST['nombre'];


$sql="INSERT INTO pais VALUES('$cod_pais','$nombre')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location: paises.php");
    
}else {
}
?>