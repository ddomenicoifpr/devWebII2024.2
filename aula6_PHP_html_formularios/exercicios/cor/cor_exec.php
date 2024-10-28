<?php

$cor = $_POST['cor'];

echo "<style>";
echo "body {background-color: " . $cor . ";}";
echo "</style>";

echo "<a href='cor.php'>Selecione outra cor</a>";