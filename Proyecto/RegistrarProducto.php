<?php
if(isset($_POST['Enviar']))
{
    

    
    include("GestorInventario.php");
    $G_I = new GestorInventario();
    if($G_I->RegistrarProducto($_POST['Nombre'],$_POST['Marca'],$_POST['Talla'],$_POST['Precio'],$_POST['Linea'],$_POST['Existencia']))
    {    
        
        $CarpetaDestino=$_SERVER['DOCUMENT_ROOT'] . "/Proyecto/Imagenes/Productos/";
        move_uploaded_file($_FILES['Imagen']['tmp_name'],$CarpetaDestino.$_POST['Nombre']. ".png");
        header('Location: index.php');
    }

}
?>