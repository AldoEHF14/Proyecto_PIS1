<?php
include('Cuenta.php');
class Proveedor extends Cuenta
{
    
    public $Nombre;
    public $Fecha_Nacimiento;
    public $Numero_Telefonico;
    public $Empresa;
    public $Codigo_Proveedor;
    public $Imagen;

    function __construct()
    {
    }

    //Metodos gets
    function getNombre()
    {
        return $this->Nombre;
    }

    function getFecha_Nacimiento()
    {
        return $this->Fecha_Nacimiento;
    }

    function getNumero_Telefonico()
    {
        return $this->Numero_Telefonico;
    }

    function getEmpresa()
    {
        return $this->Empresa;
    }

    function getCodigo_Proveedor()
    {
        return $this->Codigo_Proveedor;
    }

    function getImagen()
    {
        return $this->Imagen;
    }

    

    //Metodos sets
    function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    }

    function setFecha_Nacimiento($fecha_nacimiento)
    {
        $this->Fecha_Nacimiento = $fecha_nacimiento;
    }

    function setNumero_Telefonico($numero_telefonico)
    {
        $this->Numero_Telefonico = $numero_telefonico;
    }

    function setEmpresa($empresa)
    {
        $this->Empresa = $empresa;
    }

    function setCodigo_Proveedor($codigo_proveedor)
    {
        $this->Codigo_Proveedor = $codigo_proveedor;
    }

    function setImagen($imagen)
    {
        $this->Imagen = $imagen;
    }

    function GenerarCodigoProveedor()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $this->Codigo_Proveedor = substr(str_shuffle($permitted_chars), 0, 5);
    }
    
}
