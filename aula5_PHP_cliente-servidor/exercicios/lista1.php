<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];


echo "<span style='font-weight: bold;'>Nome completo: </span>";
echo $nome . " " . $sobrenome;

echo "<br>";

echo "<span style='font-weight: bold;'>Idade: </span>";
echo $idade;

