<?php include("../template/cabecera.php");?>

<?php
    include ("../administrador/config/bd.php");
    
    $sentenciaSQL=$conexion->prepare("SELECT * FROM libros");
    $sentenciaSQL->execute();
    $listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<?php foreach($listaLibros as $libro) { ?>

    <div class="col-md-2">

        <div class="card">
            <img class="card-img-top" src="../img/<?php echo $libro['imagen']; ?>" width="100%" height="200">
            
            <div class="card-body">
                <h5 class="card-title"><?php echo $libro['nombre']; ?></h5>
                <a name="" id="" class="btn btn-primary" href="<?php echo $libro['direccion']; ?>" role="button">Ver más</a>
            </div>
        </div>
        <br>

    </div>
<?php } ?>


<?php include("../template/pie.php");?>