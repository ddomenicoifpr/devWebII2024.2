<?php
    echo "<h2>Anos bissextos entre 1980 e 2023</h2>";
    
    for($ano=1980; $ano<=2023; $ano++) {
    	if( ($ano % 4 == 0) && ( ($ano % 100 != 0) || ($ano % 400 == 0) ))
    		echo $ano . "<br>";
    }
?>
