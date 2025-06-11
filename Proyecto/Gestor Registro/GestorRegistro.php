<?php
class GestorRegistro
{
        function RegistrarCliente($Nombre,$Fecha_Nacimiento,$Numero_Telefonico,$Correo,$Contrasenia,$Imagen)
        {
            include("ConexionBD.php");
            include('Cliente.php');
            $Cliente = new Cliente();
            $Cliente->setNombre($Nombre);
            $Cliente->setFecha_Nacimiento($Fecha_Nacimiento);
            $Cliente->setNumero_Telefonico($Numero_Telefonico);
            $Cliente->setCorreo($Correo);
            $pass = $Contrasenia;
            $Password_Encript = password_hash($pass , PASSWORD_DEFAULT);
            $Cliente->setContrasenia($Password_Encript);
            $Cliente->setImagen($Imagen);
            $inst = "INSERT INTO Cuenta (Correo,Contrasenia,Imagen) VALUES ('". $Cliente->getCorreo() ."','" . $Cliente->getContrasenia() . "','" . $Cliente->getNombre() . ".png')";
            if($conn->query($inst))
            {
                $inst = "SELECT ID_Cuenta FROM Cuenta WHERE Correo='" . $Cliente->getCorreo() . "'";
                $res = $conn->query(($inst));
                $res2 = $res->fetch_array();
                $Cliente->setID_Cuenta($res2[0]);
                $inst = "INSERT INTO Cliente (ID_Cuenta,Nombre,Fecha_Nacimiento,Numero_Telefonico) VALUE ('" . $Cliente->getID_Cuenta() . "','" . $Cliente->getNombre() . "','" . $Cliente->getFecha_Nacimiento() . "','" . $Cliente->getNumero_Telefonico() . "')";
                if($conn->query($inst))
                {
                    $conn->close();
                    return true;
                }
                else
                {
                    $conn->close();
                    return false;
                }
            }
            else
            {
                $conn->close();
                return false;
            }
        }

        function RegistrarProveedor($Nombre,$Fecha_Nacimiento,$Numero_Telefonico,$Correo,$Contrasenia,$Empresa)
        {
            include("ConexionBD.php");
            include('Proveedor.php');
            $Proveedor = new Proveedor();
            $Proveedor->setNombre($Nombre);
            $Proveedor->setFecha_Nacimiento($Fecha_Nacimiento);
            $Proveedor->setNumero_Telefonico($Numero_Telefonico);
            $Proveedor->setEmpresa($Empresa);
            $Proveedor->setCorreo($Correo);
            $pass = $Contrasenia;
            $Password_Encript = password_hash($pass, PASSWORD_DEFAULT);
            $Proveedor->setContrasenia($Password_Encript);
            $Proveedor->setImagen($_FILES['Imagen']['name']);
            $Proveedor->GenerarCodigoProveedor();

            $inst = "INSERT INTO Cuenta (Correo,Contrasenia,Imagen) VALUES ('". $Proveedor->getCorreo() ."','" . $Proveedor->getContrasenia() . "','" . $Proveedor->getNombre() .".png')";
            
            if ($conn->query($inst)) {
                $inst = "SELECT ID_Cuenta FROM Cuenta WHERE Correo='" . $Proveedor->getCorreo() . "'";
                $res = $conn->query(($inst));
                $res2 = $res->fetch_array();
                $Proveedor->setID_Cuenta($res2[0]);
                $inst = "INSERT INTO proveedor (ID_Cuenta,Nombre,Fecha_Nacimiento,Numero_Telefonico,Empresa,Codigo_Proveedor) VALUE ('" . $Proveedor->getID_Cuenta()  . "','" . $Proveedor->getNombre() . "','" . $Proveedor->getFecha_Nacimiento() . "','" . $Proveedor->getNumero_Telefonico() . "', '". $Proveedor->getEmpresa() . "','" . $Proveedor->getCodigo_Proveedor() . "')";
                if ($conn->query($inst)) {
                    return true;
                }
                else
                {
                    $conn->close();
                    return false;
                }
            }
            else{
                $conn->close();
                return false;
            }
        }


}