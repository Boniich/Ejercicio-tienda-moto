<?php

require "empresa.php";
require "moto.php";
require "cliente.php";
// require "venta.php";


$cliente1 = new Cliente("Ezequiel","Bonino",true,"DNI",333);
$cliente2 = new Cliente("Juan","Perez",true,"DNI",444);

$moto1 = new Moto(11,100,2022,"Benelli imperiale 400",85,true);
$moto2 = new Moto(12,584000,2021,"Zanella Zr 150 Ohc",70,true);
$moto3 = new Moto(13,100,2023,"Zanella Patagonian Eagle 250",55,false);

$coleccionMotos = [$moto1,$moto2,$moto3];
$coleccionCliente = [$cliente1,$cliente2];
$coleccionVentas = [];
$empresa = new Empresa("Alta Gama","Av Argenetina 123",$coleccionCliente,$coleccionMotos,$coleccionVentas);




// el valor de la moto es 100, transcurrieron 2 años desde la fabricacion, y su incremento es del 85%
// Es un caso de prueba mio para probar la formula
$codigos = array(11);
echo $empresa->registrarVenta($codigos,$cliente2);

echo "\n";


// el valor de la primera moto es 100, transcurrieron 2 años desde la fabricacion, y su incremento es del 85%
// la segunda moto no esta disponible, por eso el valor final es el mismo que el caso anterior
// Es un caso de prueba mio para probar la formula
$codigos = array(11,13);
echo $empresa->registrarVenta($codigos,$cliente2);

echo "\n";


//Apartir de aqui, ya son los casos de prueba que estan el PDF

//5- Invocar al método registrarVenta($colCodigosMoto, $objCliente) de la Clase Empresa donde el
//$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
//punto 1) y la colección de códigos de motos es la siguiente [11,12,13]. Visualizar el resultado obtenido.

$codigos = array(11,12,13);
echo $empresa->registrarVenta($codigos,$cliente2);

echo "\n";


//6- Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
//$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
//punto 1) y la colección de códigos de motos es la siguiente [0]. Visualizar el resultado obtenido.


$codigos = array(0);
echo $empresa->registrarVenta($codigos,$cliente2);

//7- Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
//$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
//punto 1) y la colección de códigos de motos es la siguiente [2]. Visualizar el resultado obtenido.

echo "\n";

$codigos = array(2);
echo $empresa->registrarVenta($codigos,$cliente2);


?>