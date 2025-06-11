<div class="w3-container w3-amber">
    <h1>La paka</h1>
</div>
<div class="w3-bar w3-amber">
    <a href="index.php" class="w3-bar-item w3-hover-white w3-button">Inicio</a>
    <a href="GUI_Productos.php" class="w3-bar-item w3-hover-white w3-button">Productos</a>
    <?php
    if(isset($_SESSION['ID_Cuenta']))
    {
        if(!(is_null($_SESSION['ID_Cuenta'])))
        {
    ?>
    <a href="GUI_Usuario.php" class="w3-bar-item w3-hover-white w3-button">Cuenta</a>
    <a href="Cerrar_Sesion.php" class="w3-bar-item w3-hover-white w3-button">Cerrar Sesion</a>
    <div class="w3-dropdown-hover">
        <?php
        if ($_SESSION['rol'] != 'Cliente') {
            ?>
        <button class="w3-button">Gestiones</button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="GUI_GestionInventario.php" class="w3-bar-item w3-button">Gestionar Productos</a>
            <?php
            if ($_SESSION['rol'] == 'Administrador') {
                ?>
            <a href="#" class="w3-bar-item w3-button">Gestion Usuarios</a>
            <?php
            }
            ?>
            <a href="#" class="w3-bar-item w3-button">Gestion Ventas</a>
        </div>
        <?php
        }
        ?>
    </div>
    <?php
        }
    }
    ?>
    <?php
    if(!(isset($_SESSION['ID_Cuenta'])))
    {
    ?>
    <a href="GUI_IniciarSesion.php" class="w3-bar-item w3-hover-white w3-button">Iniciar Sesion</a>
    <a href="GUI_Registro.php" class="w3-bar-item w3-hover-white w3-button">Registrar</a>
    <?php
    }
    ?>
</div>