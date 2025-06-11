<?php
class Articulo
{
    public $ID_Articulo;
    public $Nombre;
    public $Marca;
    public $Talla;
    public $Precio;
    public $Linea;
    public $Existencia;
    public $Imagen;

    function __construct()
    {

    }

    function getID_Articulo()
    {
        return $this->ID_Articulo;
    }

    function getNombre()
    {
        return $this->Nombre;
    }

    function getMarca()
    {
        return $this->Marca;
    }

    function getTalla()
    {
        return $this->Talla;
    }

    function getPrecio()
    {
        return $this->Precio;
    }

    function getLinea()
    {
        return $this->Linea;
    }

    function getExistencia()
    {
        return $this->Existencia;
    }

    function getImagen()
    {
        return $this->Imagen;
    }

    function setID_Articulo($id_articulo)
    {
        $this->ID_Articulo = $id_articulo;
    }

    function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    } 

    function setMarca($marca)
    {
        $this->Marca = $marca;
    }

    function setTalla($talla)
    {
        $this->Talla = $talla; 
    }

    function setPrecio($precio)
    {
        $this->Precio = $precio;
    }

    function setLinea($linea)
    {
        $this->Linea = $linea;
    }

    function setExistencia($existencia)
    {
        $this->Existencia = $existencia;
    }

    function setImagen($imagen)
    {
        $this->Imagen = $imagen;
    }
}
?>