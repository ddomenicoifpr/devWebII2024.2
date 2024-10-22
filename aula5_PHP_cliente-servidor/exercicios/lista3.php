<?php

$ini = 1;
if(isset($_GET['numIni']))
	$ini = $_GET['numIni'];

$fim = 100;
if(isset($_GET['numFim']))
	$fim = $_GET['numFim'];

for($i=$ini; $i<=$fim; $i++) {
	echo $i . "<br>";
}
