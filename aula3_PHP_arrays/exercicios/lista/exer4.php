<?php

$carro1 = array("modelo" => "Polo",
                "marca" => "Volkswagen",
                "imagem" => "https://4.bp.blogspot.com/_UX7M6asX-CM/THXuAZRZwXI/AAAAAAAAKCU/qSX77yACxz4/s640/Volkswagen-Polo-Sportline-2007-frente.JPG");

$carro2 = array("modelo" => "Onix",
                "marca" => "Chevrolet",
                "imagem" => "https://cdn.motor1.com/images/mgl/0e477z/s3/chevrolet-onix-joy.jpg");

$carro3 = array("modelo" => "Ka",
                "marca" => "Ford",
                "imagem" => "https://s3-sa-east-1.amazonaws.com/revista.mobiauto/ImagensSUVs/Ford+Ka/Ford-Ka-%C3%9Altima+-+Copia.jpg");

$carro4 = array("modelo" => "F40",
                "marca" => "Ferrari",
                "imagem" => "https://quatrorodas.abril.com.br/wp-content/uploads/2017/09/qr-698-carro-ferrari-f40-02-e1597848374633.gif");

$carro5 = array("modelo" => "Eclipse",
                "marca" => "Mitsubish",
                "imagem" => "https://fotos.socarrao.com.br/100568698/5010280/5010280OR_1690470086_95_420.jpg");

$carros = array($carro1, $carro2, $carro3, $carro4, $carro5);

//Laço para gerar os cards
foreach($carros as $carro) {
    echo "<div style='width: 300px; border: 1px solid; margin-top: 20px;'>";
    echo $carro['modelo'] . "<br>";
    echo $carro['marca'] . "<br>";
    echo "<img src='" . $carro["imagem"] . "' style='width: 100%; heigth: auto;' />";
    echo "</div>";
}
