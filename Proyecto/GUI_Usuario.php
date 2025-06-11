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
        <center>
            <div class="w3-container w3-light-grey w3-round-xlarge w3-margin" style="display: inline-block;">
            <?php
                $id_cuenta = $_SESSION['ID_Cuenta'];
                include("ConexionBD.php");
                $sql = "SELECT cuenta.Correo,cuenta.Imagen,cliente.Nombre,cliente.Nombre,cliente.Fecha_Nacimiento,cliente.Numero_Telefonico FROM cliente INNER JOIN cuenta on cliente.ID_Cuenta = cuenta.ID_Cuenta WHERE cuenta.ID_Cuenta=" . $id_cuenta . "";
                $res = $conn->query($sql);
                while($datos = $res->fetch_array())
                {
                    print_r($datos);
                    echo "\n\n\n";
                }
            ?>
                <table border='1'>
                    <tr>
                        <th colspan="2">Datos del usuario</th>
                    </tr>
                    <tr>
                        <td>Imagen</td>
                        <tr></tr>
                    </tr>
                </table>
            </div>
        </center>
    </section>
</body>
</html>