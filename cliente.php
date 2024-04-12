<?php

class Cliente
{
    private $nombre;
    private $apellido;
    private $estado;
    private $tipoDocumento;
    private $numeroDocumento;

    public function __construct($nombre, $apellido,$estado,$tipoDocumento,$numeroDocumento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->estado = $estado;
        $this->tipoDocumento = $tipoDocumento;
        $this->numeroDocumento = $numeroDocumento;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }


    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;
    }


    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }


    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;
    }


    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }


    public function __toString()
    {
        return "El nombre es: " . $this->nombre .  "\n" .
                "El apellido es: " . $this->apellido .  "\n" .
                "El estado es: " . $this->estado .  "\n" .
                "El tipo de documento es: " . $this->tipoDocumento  . "\n" .
                "El numero de documento es: " . $this->numeroDocumento .  "\n";

    }


}


$cliente = new Cliente("Ezequiel","Fernandez","Alta","DNI",33);
echo $cliente;


?>