<?php
include("Encabezado.php");
if(isset($_POST['Enviar']))
{
    include("GestorInventario.php");
    $G_I = new GestorInventario();
    if($G_I->BorrarProducto($_POST['ID_Producto']))
    {?>
        <div class="w3-container">
            <h2>El Producto fue eliminado</h2>
            <a class="w3-button w3-round-xlarge w3-green" href="index.php">Regresar a los productos</a>
        </div>
        <?php
    }
}
?>