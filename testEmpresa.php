<?php

require "empresa.php";
require "moto.php";
require "cliente.php";
// require "venta.php";


$cliente1 = new Cliente("Ezequiel","Bonino",true,"DNI",333);
$cliente2 = new Cliente("Juan","Perez",true,"DNI",444);

$moto1 = new Moto(11,100,2022,"Benelli imperiale 400",85,true);
$moto2 = new Moto(12,584000,2021,"Zanella Zr 150 Ohc",70,true);
$moto3 = new Moto(13,999900,2023,"Zanella Patagonian Eagle 250",55,false);

$coleccionMotos = [$moto1,$moto2,$moto3];
$coleccionCliente = [$cliente1,$cliente2];
$coleccionVentas = [];
$empresa = new Empresa("Alta Gama","Av Argenetina 123",$coleccionCliente,$coleccionMotos,$coleccionVentas);


//Invocar al método registrarVenta($colCodigosMoto, $objCliente) de la Clase Empresa donde el
//$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
//punto 1) y la colección de códigos de motos es la siguiente [11,12,13]. Visualizar el resultado obtenido.

// el valor de la moto es 100, transcurrieron 2 años desde la fabricacion, y su incremento es del 85%
$codigos = array(11);
echo $empresa->registrarVenta($codigos,$cliente2);


?>