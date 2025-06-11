<?php
class Cuenta
{
    private $ID_Cuenta;
    private $Correo;
    private $Contrasenia;

    function __construct()
    {
        //contructor
    }

    //Metodos gets
    function getID_Cuenta()
    {
        return $this->ID_Cuenta;
    }

    function getCorreo()
    {
        return $this->Correo;
    }

    function getContrasenia()
    {
        return $this->Contrasenia;
    }

    //Metodos sets
    function setID_Cuenta($id_cuenta)
    {
        $this->ID_Cuenta = $id_cuenta;
    }

    function setCorreo($correo)
    {
        $this->Correo = $correo;
    }

    function setContrasenia($contrasenia)
    {
        $this->Contrasenia = $contrasenia;
    }

}
