<?php 

$numeros = array(2, 5, 6, 8, 23, 45, 9, 22, 11, 31);

$soma = 0;
foreach($numeros as $num) 
    $soma += $num; //mesmo que: $soma = $soma + $num;

$media = $soma / count($numeros);

echo "A média artimética do array é: " . $media;