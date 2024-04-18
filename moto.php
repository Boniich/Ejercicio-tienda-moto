<?php

class Moto
{
    private $codigo;
    private $costo;
    private $añoFabricacion;
    private $descripcion;
    private $porcentajeIncrAnual;
    private $estaActiva;

    public function __construct($codigo, $costo, $añoFabricacion, $descripcion, $porcentajeIncrAnual, $estaActiva) {
         $this->codigo = $codigo;
         $this->costo = $costo;
         $this->añoFabricacion = $añoFabricacion;
         $this->descripcion = $descripcion;
         $this->porcentajeIncrAnual = $porcentajeIncrAnual;
         $this->estaActiva = $estaActiva;
    }


    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    public function getCosto()
    {
        return $this->costo;
    }

    public function setAñoFabricacion($añoFabricacion)
    {
        $this->añoFabricacion = $añoFabricacion;
    }

    public function getAñoFabricacion()
    {
        return $this->añoFabricacion;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function setPorcentajeIncrAnual($porcentajeIncrAnual)
    {
        $this->porcentajeIncrAnual = $porcentajeIncrAnual;
    }


    public function getPorcentajeIncrAnual()
    {
        return $this->porcentajeIncrAnual;
    }

    public function setEstaActiva($estaActiva)
    {
        $this->estaActiva = $estaActiva;
    }


    public function getEstaActiva()
    {
        return $this->estaActiva;
    }

    public function darPrecioventa($añoVenta)
    {

        //El año de la creacion de la moto, se debe restan con el año en que se hace la moto y eso deberia dar los años transcurridos

        if($this->estaActiva)
        {
            return $this->costo + $this->costo * ($añoVenta*$this->porcentajeIncrAnual);
        }else{
            return 0;
        }
    }


    public function __toString()
    {
        return 
                "El codigo es: " . $this->codigo .  "\n" .
                "El costo es: " . $this->costo .  "\n" .
                "El añoFabricacion es: " . $this->añoFabricacion .  "\n" .
                "La descripcion es: " . $this->descripcion  . "\n" .
                "El porcentajeIncrAnual es: " . $this->porcentajeIncrAnual .  "\n" .
                "El Estado es: " . $this->estaActiva;
    }
}
?>