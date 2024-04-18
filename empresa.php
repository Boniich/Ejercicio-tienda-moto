<?php

require "venta.php";

class Empresa
{
    private $denominacion;
    private $direccion;
    private $coleccionClientes;
    private $coleccionMotos;
    private $coleccionVentasRealizadas;

    public function __construct($denominacion, $direccion,$coleccionClientes,$coleccionMotos,$coleccionVentasRealizadas) {
        $this->denomiacion = $denominacion;
        $this->direccion = $direccion;
        $this->colecionClientes = $coleccionClientes;
        $this->coleccionMotos = $coleccionMotos;
        $this->coleccionVentasRealizadas = $coleccionVentasRealizadas;
    }

    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;
    }

    public function getDenominacion()
    {
        return $this->denominacion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }


    public function setColeccionClientes($coleccionClientes)
    {
        $this->coleccionClientes = $coleccionClientes;
    }

    public function getColeccionClientes()
    {
        return $this->coleccionClientes;
    }


    public function setColeccionMotos($coleccionMotos)
    {
        $this->coleccionMotos = $coleccionMotos;
    }

    public function getColeccionMotos()
    {
        return $this->coleccionMotos;
    }

    public function setColeccionVentasRealizadas($coleccionVentasRealizadas)
    {
        $this->coleccionVentasRealizadas = $coleccionVentasRealizadas;
    }

    public function getColeccionVentasRealizadas()
    {
        return $this->coleccionVentasRealizadas;
    }

    public function retornarMoto($codigoMoto)
    {
        foreach ($this->coleccionMotos as $moto) {
            if($moto->getCodigo() == $codigoMoto)
            {
                return $moto;
            }
        }
    }

    public function registrarVenta($colCodigosMoto, $objCliente)
    {
            $colMotosAVender = [];
            $venta = new Venta(01,2024,$objCliente,$colMotosAVender,0);
    
            foreach ($colCodigosMoto as $codMoto) {
                $moto = $this->retornarMoto($codMoto);

                if($moto->getEstaActiva()){
                    $venta->incorporarMoto($moto);
                }
                
            }

            return $venta->getPrecioFinal();
        


    }

    //terminar de definir el __toString
    public function __toString()
    {
        return 
        "La denominacion es: " . $this->denominacion .  "\n" .
        "La direccion es: " . $this->direccion .  "\n" .
        "La coleccionClientes es: "  .  "\n" .
        "La coleccionMotos es: " . "\n" .
        "La coleccion de ventas realizadas es: es: ";
    }


}




?>