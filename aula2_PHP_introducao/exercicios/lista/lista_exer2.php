<?php
    echo "<h2>PA de 10 valores, iniciando em 5 com razão 3</h2>";

    $n = 5;
    $r = 3;
    $conta = 1;
    
    while($conta <= 10) {
        echo $n . "<br>";
        $n = $n + $r;
        $conta++;
    }
?>
