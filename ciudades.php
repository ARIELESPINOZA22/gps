<?php
    include_once("conexion.php");
   $sql="select * from ciudad"; 
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
                    <li role="presentation" class="active"><a href="ciudades.php">Ciudad</a></li>
                    <li role="presentation"><a href="tiposs.php">Tipo de Usuarios</a></li>
                    <li role="presentation"><a href="Usuariocrudd.php">Reporte y Mantenimiento de usuarios</a></li>
                </ul>
            </div> 

            <div class="panel-body">
            
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h2>Escriba el nombre de la ciudad</h2>
                                <form action="ciudadInsertar.php" method="POST">

                                    <input type="hidden" class="form-control mb-3" name="idCiudad" placeholder="numero de id del campo ciudad">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nueva Ciudad">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        
                                        <th>id</th>
                                        <th>Nombre</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($result)){
                                        ?>
                                            <tr>
                                                <td><?php  echo $row['idCiudad']?></td>
                                                <td><?php  echo $row['nombre']?></td>
                                                   
                                                <td><a href="ciudadActualizar.php?id=<?php echo $row['idCiudad'] ?>" class="btn btn-info">Editar</a></td>
                                                <!--<td><a href="ciudadDelete.php?id=<?php echo $row['idCiudad'] ?>" class="btn btn-danger">Eliminar</a></td>-->                                        
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
