<?php
    echo "<h1>Soma</h1>";

    /* versão com WHILE
    $n = 1;
    $soma = 0;
    while($n <= 100) {
        $soma = $soma + $n;
        $n++;
    }*/

    $soma = 0;
    for($n=1; $n<=100; $n++)
        $soma += $n;

    echo "<br>" . $soma;


?>
