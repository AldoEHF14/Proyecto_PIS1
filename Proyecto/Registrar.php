<?php
include("Encabezado.php");
if (isset($_POST['Enviar'])) {
    include('ConexionBD.php');
    if ($_POST['Origen'] == 'Cliente')
    {
        $sql = "SELECT Correo FROM Cuenta";

        $res = $conn->query($sql);
        $Exist = false;
        while($res2 = $res->fetch_array())
        {
            if($res2['Correo'] == $_POST['Correo'])
            {
                $Exist = True;
            }
        }
        $conn->close();
        
        if(!$Exist)
        {
            include("GestorRegistro.php");
            $G_R = new GestorRegistro();
            if($G_R->RegistrarCliente($_POST['Nombre'],$_POST['Fecha_Nacimiento'],$_POST['Numero_Telefonico'],$_POST['Correo'],$_POST['Contrasenia'],$_FILES['Imagen']['name']))
            {
                $CarpetaDestino=$_SERVER['DOCUMENT_ROOT'] . "/Proyecto/Imagenes/Usuarios/Cliente/";
                move_uploaded_file($_FILES['Imagen']['tmp_name'],$CarpetaDestino.$_POST['Nombre'] . ".png");
                header('Location: index.php');
            }
            
                
        }
        else
        {
            ?>
            <div class="w3-container">
                <h2>El correo ya está registrado</h2>
                <a class="w3-button w3-round-xlarge w3-green" href="GUI_Registro.php">Volver a intentar</a>
            </div>
            <?php
        }
        
        
    }
    elseif($_POST['Origen'] == 'Proveedor')
    {
        $sql = "SELECT Correo FROM Cuenta";

        $res = $conn->query($sql);
        $Exist = false;
        while($res2 = $res->fetch_array())
        {
            if($res2['Correo'] == $_POST['Correo'])
            {
                $Exist = True;
            }
        }
        $conn->close();
        if(!$Exist)
        {
            include("GestorRegistro.php");
            $G_R = new GestorRegistro();
            $Codigo = $G_R->RegistrarProveedor($_POST['Nombre'],$_POST['Fecha_Nacimiento'],$_POST['Numero_Telefonico'],$_POST['Correo'],$_POST['Contrasenia'],$_POST['Empresa']);
            
            $CarpetaDestino=$_SERVER['DOCUMENT_ROOT'] . "/Proyecto/Imagenes/Usuarios/Proveedor/";
            move_uploaded_file($_FILES['Imagen']['tmp_name'], $CarpetaDestino.$_POST['Nombre'] . ".png");
                    ?>
                    <div class="w3-container">
                        <h2>El codigo que necesitas para iniciar sesion es el siguiente : <?php echo $Codigo; ?></h2>
                        <a class="w3-button w3-round-xlarge w3-green" href="GUI_IniciarSesion.php">Iniciar Sesion</a>
                        <a class="w3-button w3-round-xlarge w3-green" href="index.php">Inicio</a>
                    </div>
                    <?php
        }
        else
        {
            ?>
            <div class="w3-container">
                <h2>El correo ya está registrado</h2>
                <a class="w3-button w3-round-xlarge w3-green" href="GUI_Registro.php">Volver a intentar</a>
            </div>
            <?php
        }
    }
    elseif($_POST['Origen'] == 'Administrador')
    {
        


        $sql = "SELECT Correo FROM Cuenta";

        $res = $conn->query($sql);
        $Exist = false;
        while($res2 = $res->fetch_array())
        {
            if($res2['Correo'] == $_POST['Correo'])
            {
                $Exist = True;
            }
        }
        $conn->close();
        if (!$Exist)
        {
            include('GestorRegistro.php');
            $G_R = new GestorRegistro();
            $Codigo = $G_R->RegistrarAdministrador($_POST['Nombre'],$_POST['Fecha_Nacimiento'],$_POST['Numero_Telefonico'],$_POST['Correo'],$_POST['Contrasenia']);
                    $CarpetaDestino=$_SERVER['DOCUMENT_ROOT'] . "/Proyecto/Imagenes/Usuarios/Administrador/";
                    move_uploaded_file($_FILES['Imagen']['tmp_name'], $CarpetaDestino.$_POST['Nombre'] . ".png");
                    ?>
                    <div class="w3-container">
                        <h2>El codigo que necesitas para iniciar sesion es el siguiente : <?php echo $Codigo ?></h2>
                        <a class="w3-button w3-round-xlarge w3-green" href="GUI_IniciarSesion.php">Iniciar Sesion</a>
                        <a class="w3-button w3-round-xlarge w3-green" href="index.php">Inicio</a>
                    </div>
                    <?php
            
        }
        else
        {?>
            <div class="w3-container">
                <h2>El correo ya está registrado</h2>
                <a class="w3-button w3-round-xlarge w3-green" href="GUI_Registro.php">Volver a intentar</a>
            </div>
            <?php
        }
    }
}
