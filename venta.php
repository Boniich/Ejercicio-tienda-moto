<?php

class Venta
{
    private $numero;
    private $fecha;
    private $cliente;
    private $motos = [];
    private $precioFinal;

    public function __construct($numero, $fecha, $cliente, $motos, $precioFinal) {
        $this->numero = $numero;
         $this->fecha = $fecha;
         $this->cliente = $cliente;
         $this->motos = $motos;
         $this->precioFinal = $precioFinal;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getFecha()
    {
        $this->fecha;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setMotos($codigoMoto)
    {
        foreach ($this->motos as $moto) {
            if($moto->getCodigo() == $codigoMoto)
            {
                return $moto;
            }
        }
    }

    public function getMotos()
    {
        return $this->motos;
    }

    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }


    public function incorporarMoto($objetoMoto)
    {

        if($objetoMoto->getEstaActiva() && $this->cliente->getEstado())
        {
            //suponiendo que $fecha y el año de fabricacion sean el año y en forma numerica
            // fecha de venta = 2024
            // fecha de fabricacion = 2020
            // año = 4
            $año = $this->fecha - $objetoMoto->getAñoFabricacion();
            array_push($this->motos,$objetoMoto);
            $this->precioFinal += $objetoMoto->darPrecioVenta($año); //se debe recibir el año que se sta realizando la venta
        }
    }

}

?>