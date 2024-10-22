<?php

function area($base, $altura) {
	return $base * $altura;
}    

function perimetro($base, $altura) {
    return ($base * 2) + ($altura * 2);
}

echo "<h4>Retangulo 1</h4>";
echo "Área: " . area(10, 12) . "<br>";
echo "Perímetro: " . perimetro(10, 12) . "<br>";

echo "<h4>Retangulo 2</h4>";
echo "Área: " . area(5, 9) . "<br>";
echo "Perímetro: " . perimetro(5, 9) . "<br>";

echo "<h4>Retangulo 3</h4>";
echo "Área: " . area(25, 6) . "<br>";
echo "Perímetro: " . perimetro(25, 6) . "<br>";
