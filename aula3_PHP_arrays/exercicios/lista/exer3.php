<?php

$flores = array("Orquídea", "Margarida", "Petúnia");
$frutas = array("Laranja", "Maçã", "Limão");
$cidades = array("Foz do Iguaçu", "Cascavel", "Toledo");
$pontos = array("Itaipu", "Cataratas", "Parque das Aves");

$tabela = array($flores, $frutas, $cidades, $pontos);

echo "<table border=1>";

foreach($tabela as $l) {
    echo "<tr>";
    foreach($l as $col)
        echo "<td>" . $col . "</td>";
    echo "</tr>";
}

echo "</table>";