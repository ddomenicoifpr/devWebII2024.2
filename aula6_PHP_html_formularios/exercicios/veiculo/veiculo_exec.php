<?php

$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$combustivel = $_POST['combustivel'];

echo "Modelo: " . $modelo . "<br>";
echo "Marca: " . $marca . "<br>";

if($combustivel == 'A')
    $combustivel = 'Álcool';
else if($combustivel == 'G')
    $combustivel = 'Gasolina';
else if($combustivel == 'F')
    $combustivel = "Flex";

echo "Combustível: " . $combustivel . "<br>";