<?php

$profs = array("Daniel", "Ana Carla", "Humberto", "Julio", "Juliana");
$times = array("Grêmio", "Flamengo", "Palmeiras", "Cruzeiro", "Botafogo");
$frutas = array("Maça", "Uva", "Laranja", "Limão", "Pera");
$animais = array("Cachorro", "Gato", "Cavalo", "Aranha", "Urso");

echo "<h3>Professores:</h3>";
echo "<ol>";
foreach($profs as $prof)
    echo "<li>" . $prof . "</li>";
echo "</ol>";

echo "<h3>Times:</h3>";
echo "<ol>";
foreach($times as $t)
    echo "<li>" . $t . "</li>";
echo "</ol>";

echo "<h3>Frutas:</h3>";
echo "<ol>";
foreach($frutas as $f)
    echo "<li>" . $f . "</li>";
echo "</ol>";

echo "<h3>Animais:</h3>";
echo "<ol>";
foreach($animais as $a)
    echo "<li>" . $a . "</li>";
echo "</ol>";


