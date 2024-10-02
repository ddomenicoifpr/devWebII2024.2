<?php
    echo "<h2>10 números, inciando em 1 e pulando de 2 em 2</h2>";
    
    $num = 1;
    $conta = 1;
    
    while($conta <= 10) {
        echo $num . "<br>";
        $num = $num + 2;
        $conta++;
    }
?>
