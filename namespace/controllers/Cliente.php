<?php
namespace Controllers;
//require_once ("../models/Persona.php");
//require_once ("../autoload.php");
use Models\Persona;

class Cliente extends Persona
{
    protected $fltCredito;

    function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setCredito(string $credito)
    {
        $this->fltCredito = $credito;
    }

    public function getCredito() : float
    {
        return $this->fltCredito;
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