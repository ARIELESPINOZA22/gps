<?php
 include_once("conexion.php");   
    if(isset($_POST['submit'])){
        $tipo=$_POST['tipo'];
        $rol=$_POST['rol'];
        $pais=$_POST['pais'];
        $ciudad=$_POST['ciudad'];
        $nombre=$_POST['nombre'];
        $login=$_POST['login'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $estado=$_POST['estado'];
        $clave=$_POST['clave'];
        $correo=$_POST['correo'];
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>GPS</title>
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
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">

                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="index.php">Usuario</a></li>
                    <li role="presentation"><a href="paises.php">Pais</a></li>
                    <li role="presentation"><a href="ciudades.php">Ciudad</a></li>
                    <li role="presentation"><a href="tiposs.php">Tipo de Usuarios</a></li>
                    <li role="presentation"><a href="Usuariocrudd.php">Reporte usuarios</a></li>
                </ul>
            </div> 

           <!-- <div class="panel-body">
                <h2>REGISTRO DE NUEVO USUARIO</h2>
                
              
                    
                    <table border=0 align="center" class="table">
                    
                    <tr>
                        <td>Tipo de Usuario</td>
                        <td><select name="tipo">
                            <?php $sql="select * from tipousuario"; 
                            $result=mysqli_query($conexion,$sql);
                            while ($row=mysqli_fetch_assoc($result)) {
                                $id=$row["idTipoUsuario"];
                                $nom=$row["nombre"];
                                
                            ?>
                            <option value="<?php echo $id ?>"><?php echo $nom?></option>
                            <?php }?>
                        </select></td>
                    </tr>

                    <tr>
                        <td>Rol Administrativo</td>
                        <td><select name="rol">
                            <?php $sql="select * from rol"; 
                            $result=mysqli_query($conexion,$sql);
                            while ($row=mysqli_fetch_assoc($result)) {
                                $id=$row["idRol"];
                                $nom=$row["nombre"];
                            ?>
                            <option value="<?php echo $id ?>"><?php echo $nom ?></option>
                            <?php }?>
                        </select></td>
                    </tr>

                    <tr>
                        <td>Pais</td>
                        <td><select name="pais">
                            <?php $sql="select * from pais"; 
                            $result=mysqli_query($conexion,$sql);
                            while ($row=mysqli_fetch_assoc($result)) {
                                $id=$row["idPais"];
                                $nom=$row["nombre"];
                            ?>
                            <option value="<?php echo $id ?>"><?php echo $nom ?></option>
                            <?php }?>
                        </select></td>
                    </tr>
                    
                    <tr>
                        <td>Ciudad</td>
                        <td><select name="ciudad">
                            <?php $sql="select * from ciudad"; 
                            $result=mysqli_query($conexion,$sql);
                            while ($row=mysqli_fetch_assoc($result)) {
                                $id=$row["idCiudad"];
                                $nom=$row["nombre"];
                            echo "<option value=".$id.">".$nom."</option>";
                            } ?>
                        </select></td>
                    </tr>

                    <tr>
                        <td>Nombre y apellidos :(3-50)cars solo letras y ñ</td>
                        <td><input type="text" name="nombre" placeholder ="Nombre" value="<?php if(isset($nombre)) echo $nombre;?>"></td>
                    </tr>
                    <tr>
                        <td>Login: :(3-20)cars solo minusculas sin ñ ni espacios</td>
                        <td><input type="text" name="login" placeholder ="Nombre de Usuario" value="<?php if(isset($login)) echo $login;?>"></td>
                    </tr>
                    <tr>
                        <td>Direccion :(3-70)cars letras,numeros, caracteres (.) (#)  </td>
                        <td><input type="text" name="direccion" placeholder ="Direccion" value="<?php if(isset($direccion)) echo $direccion;?>"></td>
                    </tr>
                     <tr>
                        <td>Telefono</td>
                        <td> <input type="text" name="telefono" placeholder ="Telefono" value="<?php if(isset($telefono)) echo $telefono;?>"></td>
                    </tr>
                     <tr>
                        <td>Estado</td>
                        <td><select name="estado">
                            <option selected="selected" value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select></td>
                    </tr>
                     <tr>
                        <td>clave : letras y numeros sin espacios ni ñÑ</td>
                        <td><input type="text" name="clave" placeholder ="clave" value="<?php if(isset($clave)) echo $clave;?>"></td>
                    </tr>
                    <tr>
                        <td>correo</td>
                        <td><input type="text" name="correo" placeholder ="Correo Electronico" value="<?php if(isset($correo)) echo $correo;?>"></td>
                    </tr>
                    <tr>
                        
                        <td colspan="2" align="center"><input type="submit" name="submit"></td>
                    </tr>
                    </table>
                    <?php  include("usuarioValida.php");  ?>
                        
                    
                    
                
            </div>-->
        </div>
        <div class="panel-footer">Sistema de Gestion de GPS ver.1.0 <a href"http://127.0.0.1/gps">127.0.0.1</a></div>
        <!--Panek cierra-->

    </div>
</form>
</body>
</form>
