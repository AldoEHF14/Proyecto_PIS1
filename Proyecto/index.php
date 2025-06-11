<html>
<?php
include("Encabezado.php");
?>

<body>
    <header>
        <?php
        include("menu.php");
        ?>
    </header>
    <section>
        <div class="w3-padding">
        <h2>Lo mas Nuevo</h2>
            <?php
            include("GestorInventario.php");
            $G_P = new GestorInventario();
            $G_P->ConsultarMasNuevos();
            $productos = $G_P->getLista_Articulos();
            $cant = $G_P->getCantidad();
            for($j = 0; $j < $cant; $j++){
            ?>
                <a href="GUI_Producto.php?id=<?php echo $productos[$j]->getID_Articulo();?>" class="w3-card w3-padding w3-light-grey" >
                    <div class="w3-container w3-center" style="display:inline-block">
                        <img src="Imagenes/Productos/<?php echo $productos[$j]->getImagen(); ?>" width="100px" height="150px">
                        <div class="w3-container w3-center">
                            <p style="font-size: 10px"><?php echo "Nombre:" . $productos[$j]->getNombre(); ?></p>
                            <p style="font-size: 10px"><?php echo "Precio: $" . $productos[$j]->getPrecio(); ?></p>
                            <p></p>
                            <br\>
                        </div>
                    </div>
            </a>
            <?php
            }
            ?>
        </div>

        <div>
            
        </div>
        <br/>
        <div>
            <h2>Top 5</h2>
        </div>
    </section>
</body>

</html>