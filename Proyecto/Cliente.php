<?php
include('Cuenta.php');
class Cliente extends Cuenta
{
    
    private $Nombre;
    private $Fecha_Nacimiento;
    private $Numero_Telefonico;
    private $Imagen;

    function __construct()
    {
        parent::__construct();
        //constructor vacio
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

    function setImagen($imagen)
    {
        $this->Imagen = $imagen;
    }

}
