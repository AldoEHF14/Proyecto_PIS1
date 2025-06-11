<?php
class GestorInventario
{
    private $ListaArticulos = array();
    private $Cantidad;
    
    function __construct()
    {
        
    }

    //Funcionalidades
    function ConsultarTodosArticulos()
    {
        include('ConexionBD.php');
        include("Articulo.php");
        $sql = "select * from articulo";
        $res = $conn->query($sql);
        $j=0;
        while($Producto = $res->fetch_array())
        {
            $this->ListaArticulos[$j] = new Articulo();
            $this->ListaArticulos[$j]->setNombre($Producto['Nombre']);
            $this->ListaArticulos[$j]->setMarca($Producto['Marca']);
            $this->ListaArticulos[$j]->setTalla($Producto['Talla']);
            $this->ListaArticulos[$j]->setPrecio($Producto['Precio']);
            $this->ListaArticulos[$j]->setLinea($Producto['Linea']);
            $this->ListaArticulos[$j]->setExistencia($Producto['Existencia']);
            $this->ListaArticulos[$j]->setImagen($Producto['Imagen']);
            $j++;
        }

        $sql = "SELECT COUNT(*) FROM Articulo";
        $res = $conn->query($sql);
        $res2 = $res->fetch_array();
        $this->Cantidad = $res2[0];
    }

    function ConsultarMasNuevos()
    {
        include('ConexionBD.php');
        include("Articulo.php");
        $sql = "SELECT * FROM `articulo` ORDER BY ID_Articulo DESC LIMIT 5";
        $res = $conn->query($sql);
        $j=0;
        while($Producto = $res->fetch_array())
        {
            $this->ListaArticulos[$j] = new Articulo();
            $this->ListaArticulos[$j]->setNombre($Producto['Nombre']);
            $this->ListaArticulos[$j]->setMarca($Producto['Marca']);
            $this->ListaArticulos[$j]->setTalla($Producto['Talla']);
            $this->ListaArticulos[$j]->setPrecio($Producto['Precio']);
            $this->ListaArticulos[$j]->setLinea($Producto['Linea']);
            $this->ListaArticulos[$j]->setExistencia($Producto['Existencia']);
            $this->ListaArticulos[$j]->setImagen($Producto['Imagen']);
            $j++;
        }
        $this->Cantidad = 5;
        
    }

    function RegistrarProducto($Nombre, $Marca, $Talla, $Precio, $Linea, $Existencia)
    {
        include('ConexionBD.php');
        include('Articulo.php');
        $Articulo = new Articulo();
        $Articulo->setNombre($Nombre);
        $Articulo->setMarca($Marca);
        $Articulo->setTalla($Talla);
        $Articulo->setPrecio($Precio);
        $Articulo->setLinea($Linea);
        $Articulo->setExistencia($Existencia);
        $sql = "INSERT INTO Articulo (Nombre,Marca,Talla,Precio,Linea,Existencia,Imagen) VALUES ('" . $Articulo->getNombre() . "','" . $Articulo->getMarca() . "'," . $Articulo->getTalla()  . "," . $Articulo->getPrecio() . ",'" . $Articulo->getLinea() . "'," . $Articulo->getExistencia() . ",'" . $Articulo->getNombre() .".png')";
        if ($conn->query($sql)) {
            $conn->close();
            return true;
        }
    }

    function BorrarProducto($ID_Producto)
    {
        include("ConexionBD.php");
        include("Articulo.php");
        $sql="DELETE FROM Articulo WHERE ID_Articulo=" . $ID_Producto;
        if($conn->query($sql))
        {
            $conn->close();
            return true;
        }
        return false;
    }


    //Gets
    function getLista_Articulos()
    {
        return $this->ListaArticulos;
    }

    function getCantidad()
    {
        return $this->Cantidad;
    }

    //Sets
    function set($listaarticulos)
    {
        $this->ListaArticulos = $listaarticulos;
    }

    function setCantidad($cantidad)
    {
        $this->Cantidad = $cantidad;
    }
}
?>