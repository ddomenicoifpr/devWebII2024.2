<?php
    echo "<h1>Números de 1 a 50 divisíveis por 3</h1>";

    for($i=1; $i<=50; $i++) {
	if(($i % 3) == 0)
		echo $i . "<br>";
    }

?>
