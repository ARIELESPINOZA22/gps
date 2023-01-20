<?php 
    include("conexion.php");
    

$id=$_GET['id'];

$sql="SELECT * FROM pais WHERE idPais='$id'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
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
                    <li role="presentation" class="active"><a href="paises.php">Pais</a></li>
                    <li role="presentation"><a href="ciudades.php">Ciudad</a></li>
                    <li role="presentation"><a href="tipos.php">Tipo de Usuarios</a></li>
                    <li role="presentation"><a href="Usuariocrud.php">Reporte y Mantenimiento de usuarios</a></li>
                </ul>
            </div> 

            <div class="panel-body">
                    <form action="paisUpdate.php" method="POST">
                    
                                <input type="hidden" name="idPais" value="<?php echo $row['idPais']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Pais" value="<?php echo $row['nombre']  ?>">
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                
                    


            </div>
        </div>
        <div class="panel-footer">Sistema de Gestion de GPS <a href"http://127.0.0.1/gps">127.0.0.1</a></div>
        <!--Panek cierra-->

    </div>
</form>
</body>
</html>
