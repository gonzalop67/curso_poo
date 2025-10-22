<?php
trait Carrito
{
    public $strCarrito;
    public $intCantidad;

    public function setCarrito(string $producto, int $cantidad)
    {
        $this->strCarrito = $producto;
        $this->intCantidad = $cantidad;
    }

    abstract public function getCarrito();
}
