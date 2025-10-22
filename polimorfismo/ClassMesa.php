<?php

require_once("ClassMueble.php");

final class Mesa extends Mueble
{
    private $strForma = "";
    protected $strTamanio;

    public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamanio)
    {
        parent::__construct($descripcion, $precio, $marca, $color, $material);
        
        $this->strTamanio = $tamanio;
    }

    public function setForma(string $forma)
    {
        $this->strForma = $forma;
    }

    public function getFormaetForma() : string
    {
        return $this->strForma;
    }

    public function getInfoProducto()
    {
        $arrProducto = array(
            'producto' => $this->strDescripcion,
            'precio' => $this->fltPrecio,
            'stock_minimo' => $this->intStockMinimo,
            'estado' => $this->strStatus,
            'Material' => $this->strMaterial,
            'color' => $this->strColor,
            'Tamaño' => $this->strTamanio,
            'Forma' => $this->strForma
        );
        return $arrProducto;
    }
}
