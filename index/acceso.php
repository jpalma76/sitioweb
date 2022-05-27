<?php
    
    session_start();
    if($_POST){
        if(($_POST['usuario']=="admin")&&($_POST['contrasenia']=="password")){
            
            $_SESSION['usuario']="ok";
            $_SESSION['nombreUsuario']="Juan Palma";            
            header('Location:inicio.php');
        } else{
            $mensaje="Error, Usuario y/o contraseña son incorrectos";

        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                
            </div>
        
            <div class="col-md-4">
                <br><br><br>
                <div class="card">
                    <div class="card-header">
                        Login de Usuario
                    </div>
                    <div class="card-body">

                        <?php if(isset($mensaje)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $mensaje; ?>
                            </div>
                        <?php } ?> 

                        <form method="POST">

                            <div class ="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Ingrese usuario">
                            </div>

                            <div class="form-group">
                                <label for="contrasenia">Contraseña:</label>
                                <input type="password" class="form-control" name="contrasenia" placeholder="Ingrese contraseña">
                            </div>
                                                    
                            <button type="submit" class="btn btn-primary">Ingresar</button>

                            <a href="index.php"><button type="button" class="btn btn-info" >Salir</button></a>

                        </form>
                        
 
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>


</body>
</html>