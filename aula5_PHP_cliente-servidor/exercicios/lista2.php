<?php


function maior($n1, $n2, $n3) {
	$maior = 0;
	if($n1 > $n2)
		$maior = $n1;
	else
		$maior = $n2;
		
	if($n3 > $maior)
		$maior = $n3;
		
	return $maior;
}

$n1 = $_GET['num1'];
$n2 = $_GET['num2'];
$n3 = $_GET['num3'];

echo "Números de entrada: " . $n1 . ", " . $n2 . ", " . $n3 . ".";
echo "<br>";
echo "Maior: " . maior($n1, $n2, $n3);
