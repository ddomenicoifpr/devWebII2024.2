<?php

echo "<h1>Cálculos entre 5 e 4</h1>";

$pri = 5;
$seg = 4;

echo "Primeiro valor elevado ao segundo valor: " . ($pri ** $seg);
echo "<br>Primeiro valor vezes o segundo valor: " . ($pri * $seg);
echo "<br>Número inverso do primeiro valor: " . (1 / $pri);
echo "<br>Soma do segundo número com a metade do primeiro número: " . (($pri / 2) + $seg);
echo "<br>Diferença do primeiro número com o segundo: " . ($pri - $seg);
echo "<br>Valor oposto do segundo número: " . ($seg * -1);
