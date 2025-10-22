<?php
namespace Controllers;
//require_once ("../models/Persona.php");
//require_once ("../autoload.php");
use Models\Persona;

class Empleado extends Persona
{
    protected $strPuesto;

    function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setPuesto(string $puesto)
    {
        $this->strPuesto = $puesto;
    }

    public function getPuesto() : string
    {
        return $this->strPuesto;
    }

    public function getDatosPersonales()
    {
        return $datos = "
            <h3>DATOS PERSONALES</h3>
            DPI: {$this->intDpi}<br>
            Nombre: {$this->strNombre}<br>
            Edad: {$this->intEdad}<br>
        ";
    }

    public function setMensaje(string $mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function getMensaje(): string
    {
        return $this->mensaje . ' ' . $this->strNombre;
    }
}
