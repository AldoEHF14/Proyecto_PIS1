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
            <button class="w3-bar-item w3-button" onclick="openForm('Comprador')">Comprador</button>
            <button class="w3-bar-item w3-button" onclick="openForm('Proveedor')">Proveedor</button>
            <button class="w3-bar-item w3-button" onclick="openForm('Administrador')">Administrador</button>
        </div>

        <div id="Comprador" class="w3-container w3-display-container Cuenta">
            <?php include("FormRegCliente.html");
            ?>
        </div>

        <div id="Proveedor" class="w3-container w3-display-container Cuenta" style="display:none">
            <?php include("FormRegProveedor.html"); ?>
        </div>

        <div id="Administrador" class="w3-container w3-display-container Cuenta" style="display:none">
            <?php include("FormRegAdministrador.html");?>
        </div>

        <script>
            function openForm(Usuario) {
                var i;
                var x = document.getElementsByClassName("Cuenta");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                document.getElementById(Usuario).style.display = "block";
            }
        </script>
    </section>
</body>

</html>