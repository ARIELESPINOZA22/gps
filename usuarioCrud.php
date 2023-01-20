<?php
    include_once("conexion.php");
   $sql="select * from usuarios"; 
    $result=mysqli_query($conexion,$sql);
    
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>VENTAS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
        .container {
            padding: 20px;
        }

        .cart-link {
            width: 100%;
            text-align: right;
            display: block;
            font-size: 22px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">

                <ul class="nav nav-pills">
                    <li role="presentation" ><a href="index.php">Usuario</a></li>
                    <li role="presentation" ><a href="paises.php">Pais</a></li>
                    <li role="presentation" ><a href="ciudades.php">Ciudad</a></li>
                    <li role="presentation" ><a href="tipos.php">Tipo de Usuarios</a></li>
                    <li role="presentation" class="active"><a href="Usuariocrud.php">Reporte de usuarios</a></li>
                </ul>
            </div> 

            <div class="panel-body">
            
                    <div class="row"> 
                        
                        
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        
                                        <th>id</th>
                                        <th>Tipo</th>
                                        <th>Rol</th>
                                        <th>Pais</th>
                                        <th>Ciudad</th>
                                        <th>Nombre</th>
                                        <th>Login</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Estado</th>
                                        <th>clave</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                
                                        <?php
                                            while($row=mysqli_fetch_assoc($result)){
                                        ?>
                                            <tr>
                                                
                                                <td><?php  echo $row['idUsuario']?></td>
                                                <td>
                                                <?php
                                                 $aux=$row['tipoUsuario'];
                                                 $sql2="select * from tipousuario where idTipoUsuario = $aux";
                                                 $result2=mysqli_query($conexion,$sql2);
                                                 $row2=mysqli_fetch_assoc($result2);
                                                 echo $row2['nombre'];
                                                 ?>

                                                </td>

                                                <td>
                                                <?php
                                                 $aux=$row['rolUsuario'];
                                                 $sql2="select * from rol where idRol = $aux";
                                                 $result2=mysqli_query($conexion,$sql2);
                                                 $row2=mysqli_fetch_assoc($result2);
                                                 echo $row2['nombre'];
                                                 ?>

                                                </td>
                                                
                                                <td>
                                                <?php
                                                 $aux=$row['idPais'];
                                                 $sql2="select * from pais where idPais = $aux";
                                                 $result2=mysqli_query($conexion,$sql2);
                                                 $row2=mysqli_fetch_assoc($result2);
                                                 echo $row2['nombre'];
                                                 ?>

                                                </td>

                                                <td>
                                                <?php
                                                 $aux=$row['idCiudad'];
                                                 $sql2="select * from ciudad where idCiudad = $aux";
                                                 $result2=mysqli_query($conexion,$sql2);
                                                 $row2=mysqli_fetch_assoc($result2);
                                                 echo $row2['nombre'];
                                                 ?>

                                                </td>
                                                
                                                
                                                <td><?php  echo $row['nombre']?></td>
                                                <td><?php  echo $row['login']?></td>
                                                <td><?php  echo $row['direccion']?></td>
                                                <td><?php  echo $row['telefono']?></td>
                                                <td><?php  echo $row['estado']?></td>
                                                <td><?php  echo $row['clave']?></td>
                                                <td><?php  //echo $row['correo']?></td>

                                                   
                                                <td><a href="usuarioActualizar.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-info">Editar</a></td>
                                                <td><a href="usuarioDelete.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-danger">Eliminar</a></td>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>



            </div>
        </div>
        <div class="panel-footer">Sistema de Gestion de GPS <a href"http://127.0.0.1/gps">127.0.0.1</a></div>
        <!--Panek cierra-->

    </div>
</form>
</body>
</html>
