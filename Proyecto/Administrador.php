<?php

include('Cuenta.php');
class Administrador extends Cuenta
{
    private $Nombre;
    private $Fecha_Nacimiento;
    private $Numero_Telefonico;
    private $Codigo_Admistrador;
    private $Imagen;

    //Metodos gets
    function getNombre(){
        return $this->Nombre;
    }

    function getFecha_Nacimiento(){
        return $this->Fecha_Nacimiento;
    }

    function getNumero_Telefonico(){
        return $this->Numero_Telefonico;
    }

    function getCodigo_Administrador()
    {
        return $this->Codigo_Admistrador;
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

    function setCodigo_Administrador($codigo_admistrador)
    {
        $this->Codigo_Admistrador = $codigo_admistrador;
    }

    function setImagen($imagen)
    {
        $this->Imagen = $imagen;
    }


    function GenerarCodigoAdmin()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $this->Codigo_Admistrador = substr(str_shuffle($permitted_chars), 0, 10);
    }
}
