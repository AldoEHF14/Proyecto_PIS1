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
        <div class="w3-bar w3-black">
            <button class="w3-bar-item w3-button" onclick="openForm('Aniadir')">Añadir</button>
            <button class="w3-bar-item w3-button" onclick="openForm('Editar')">Modificar</button>
            <button class="w3-bar-item w3-button" onclick="openForm('Eliminar')">Eliminar</button>
        </div>

        <div id="Aniadir" class="w3-container w3-display-container Producto">
            <?php include("FormRegArticulo.html");
            ?>
        </div>

        <div id="Editar" class="w3-container w3-display-container Producto" style="display:none">
            <?php include("FormLogProveedor.html"); ?>
        </div>

        <div id="Eliminar" class="w3-container w3-display-container Producto" style="display:none">
            <?php include("FormBorrarArticulo.html");?>
        </div>

        <script>
            function openForm(Producto) {
                var i;
                var x = document.getElementsByClassName("Producto");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                document.getElementById(Producto).style.display = "block";
            }
        </script>
    </section>
</body>

</html>