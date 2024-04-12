<?php


class Venta
{
    private $numero;
    private $fecha;
    private $cliente;
    private $motos;
    private $precioFinal;

    public function __construct($numero, $fecha, $cliente, $motos, $precioFinal) {
        $this->numero = $numero;
         $this->fecha = $fecha;
         $this->cliente = $cliente;
         $this->motos = $motos; // como insertar una coleccion de datos por constructor
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
        return $this->cliente
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

    public function incorporarMoto($objetoMoto)
    {
        if($objetoMoto->estaActiva() && $this->cliente->getEstado())
        {
            array_push($this->moto,$objetoMoto);
            $this->precioFinal += $objetoMoto->darPrecioVenta(); //se debe recibir el año que se sta realizando la venta
        }

        
    }

}

?>