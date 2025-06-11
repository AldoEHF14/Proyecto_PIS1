<?php
session_start();
if (isset($_POST['Enviar'])) {
    include('ConexionBD.php');
    if ($_POST['Origen'] == 'Cliente')
    {
        include('Cliente.php');
        $Cliente = new Cliente();

        $Cliente->setCorreo($_POST['Correo']);
        $Cliente->setContrasenia($_POST['Contrasenia']);

        $sql = "SELECT Contrasenia FROM Cuenta WHERE Correo='" . $Cliente->getCorreo() . "'";
        $res = $conn->query($sql);

        $res2 = $res->fetch_array();
        if(password_verify($Cliente->getContrasenia(),$res2['Contrasenia']))
		{
            $inst = "SELECT ID_Cuenta FROM Cuenta WHERE Correo='" . $Cliente->getCorreo() . "'";
            $res = $conn->query(($inst));
            $res2 = $res->fetch_array();
			$_SESSION['ID_Cuenta']=$res2['ID_Cuenta'];
            $_SESSION['rol'] = 'Cliente';
			header('Location: index.php');
		}

    }
    elseif($_POST['Origen'] == 'Proveedor')
    {
        include('Proveedor.php');
        $Proveedor = new Proveedor();

        $Proveedor->setCorreo($_POST['Correo']);
        $Proveedor->setContrasenia($_POST['Contrasenia']);
        $Proveedor->setCodigo_Proveedor($_POST['Codigo_Proveedor']);

        $sql = "SELECT Contrasenia FROM Cuenta WHERE Correo='" . $Proveedor->getCorreo() . "'";
        $res = $conn->query($sql);

        $res2 = $res->fetch_array();
        if(password_verify($Proveedor->getContrasenia(),$res2['Contrasenia']))
		{
            $inst = "SELECT ID_Cuenta FROM Cuenta WHERE Correo='" . $Proveedor->getCorreo() . "'";
            $res = $conn->query(($inst));
            $res2 = $res->fetch_array();

            $inst2 = "SELECT Codigo_Proveedor FROM Proveedor WHERE ID_Cuenta=" . $res2['ID_Cuenta'];
            $res3 = $conn->query($inst2);
            $res4 = $res3->fetch_array();
            if($res4['Codigo_Proveedor'] == $Proveedor->getCodigo_Proveedor())
            {
                $_SESSION['ID_Cuenta']=$res2['ID_Cuenta'];
                $_SESSION['rol'] = 'Proveedor';
			    header('Location: index.php');
            }
		}
        else
        {
            echo "Contraseña incorrecta";
        }
    }
    elseif($_POST['Origen'] == 'Administrador')
    {
        include('Administrador.php');
        $Administrador = new Administrador();

        $Administrador->setCorreo($_POST['Correo']);
        $Administrador->setContrasenia($_POST['Contrasenia']);
        $Administrador->setCodigo_Administrador($_POST['Codigo_Administrador']);

        $sql = "SELECT Contrasenia FROM Cuenta WHERE Correo='" . $Administrador->getCorreo() . "'";
        $res = $conn->query($sql);

        $res2 = $res->fetch_array();
        if(password_verify($Administrador->getContrasenia(),$res2['Contrasenia']))
		{
            $inst = "SELECT ID_Cuenta FROM Cuenta WHERE Correo='" . $Administrador->getCorreo() . "'";
            $res = $conn->query(($inst));
            $res2 = $res->fetch_array();


            $inst2 = "SELECT Codigo_Administrador FROM Administrador WHERE ID_Cuenta=" . $res2['ID_Cuenta'];
            $res3 = $conn->query($inst2);
            $res4 = $res3->fetch_array();
            if($res4['Codigo_Administrador'] == $Administrador->getCodigo_Administrador())
            {
                $_SESSION['ID_Cuenta']=$res2['ID_Cuenta'];
                $_SESSION['rol'] = 'Administrador';
                header('Location: index.php');
            }
            else
            {
                echo "Codigo";
            }
			
		}
    }
}