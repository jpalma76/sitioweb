<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header("Location:../index/index.php");
  } else{

    if($_SESSION['usuario']=="ok"){
      $nombreUsuario=$_SESSION["nombreUsuario"];
      
    }

  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sitio web</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="nav navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="../img/avatar.jpg"><?php echo $nombreUsuario; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index/inicio.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index/productos.php">Libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index/nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../administrador/index.php">Administrar sitio web</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index/index.php">Cerrar sesion</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <br>
        <div class="row">