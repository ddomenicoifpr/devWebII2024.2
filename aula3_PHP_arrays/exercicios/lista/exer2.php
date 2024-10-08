<?php

$ar1 = array("Pincel", "Caneta", "Régua", "Mouse", "Apagador");
$ar2 = array();

foreach($ar1 as $elem) {
    array_push($ar2, $elem);
}

foreach($ar2 as $idx => $elem) {
    if($idx < count($ar2)-1)
        echo $elem . ", ";
    else
        echo $elem;
}