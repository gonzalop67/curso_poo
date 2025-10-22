<?php
require_once("Operacion.php");
require_once("OperacionesBasicas.php");

class Calculate implements Operaciones, Operacion_basica
{
    public function raizCuadrada(float $numero): float
    {
        return sqrt($numero);
    }

    public function potencia(int $numero, int $potencia): int
    {
        return pow($numero, $potencia);
    }

    public function op_basica(float $cant1, float $cant2, string $operacion)
    {
        if ($operacion == "+") {
            $result = $cant1 + $cant2;
        } else if ($operacion == "-") {
            $result = $cant1 - $cant2;
        } else if ($operacion == "*") {
            $result = $cant1 * $cant2;
        } else if ($operacion == "/") {
            $result = $cant1 / $cant2;
        } else {
            $result = "Operación no válida";
        }

        return $result;
    }
}
