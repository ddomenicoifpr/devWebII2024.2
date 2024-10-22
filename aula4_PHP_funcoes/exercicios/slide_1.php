<?php

function fatorial($nro) {
    $fatorial = $nro;
    for($i=$nro-1; $i>=1; $i--) {
        $fatorial *= $i; //Mesmo que: $fatorial = $fatorial * $i; 
    }
    return $fatorial;
}

//Execução
echo "<h2>Exercício 1 - Funções</h2>";
for($i=5; $i<=12; $i++) {
    echo "Fatorial de " . $i . " é: " . fatorial($i);
    echo "<br>";
}