<?php

function desenhaLinha($dados) {
	echo "<tr>";
   	echo "<td>" . $dados['nome'] . "</td>";
	echo "<td>" . $dados['habitantes'] . "</td>";
	echo "<td>" . $dados['area'] . "</td>";
	echo "<td>" . $dados['altitude'] . "</td>";
	echo "<td>" . $dados['estado'] . "</td>";    
	echo "</tr>";
}    

$cabec = array('nome' => '<b>Nome</b>', 'habitantes' => '<b>Habitantes</b>', 'area' => '<b>Área</b>', 'altitude' => '<b>Altitude</b>', 'estado' => '<b>Estado</b>');
$linha1 = array('nome' => 'Foz do Iguaçu', 'habitantes' => 250000, 'area' => '500km²', 'altitude' => '145m', 'estado' => 'Paraná-PR');
$linha2 = array('nome' => 'Casacavel', 'habitantes' => 300000, 'area' => '420km²', 'altitude' => '320m', 'estado' => 'Paraná-PR');
$linha3 = array('nome' => 'Chapecó', 'habitantes' => 240000, 'area' => '120km²', 'altitude' => '620m', 'estado' => 'Santa Catarina-SC');
$linha4 = array('nome' => 'Blumenau', 'habitantes' => 330000, 'area' => '200km²', 'altitude' => '85m', 'estado' => 'Santa Catarina-SC');
$linha5 = array('nome' => 'Curitiba', 'habitantes' => 1500000, 'area' => '300km²', 'altitude' => '850m', 'estado' => 'Paraná-PR');


$linhas = array($cabec, $linha1, $linha2, $linha3, $linha4, $linha5);

echo "<table border='1'>";
foreach($linhas as $linha) {
	desenhaLinha($linha);
}
echo "</table>";
