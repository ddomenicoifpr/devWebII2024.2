<?php
    echo "<h1>WHILE</h1>";
    $num = 1;
    while($num <= 10) {
        echo $num . "<br>";
        //$num = $num + 1;
        $num++;
    }

    echo "<br><br>DO-WHILE<br>";
    $num = 1;
    do {
        echo $num . "<br>";
        $num++;
    } while($num <= 10);

    echo "<br><br>FOR<br>";
    for($num=1; $num<=10; $num++) {
        echo $num . "<br>";
    }
?>
