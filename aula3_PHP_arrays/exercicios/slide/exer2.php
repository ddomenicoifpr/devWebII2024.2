<?php
    echo "<h2>Exercício 2 - Arrays</h2>";
    
    $pes1 = array("nome" => "Manuel de Medeiros",
                  "endereco" => "Rua das Acácias",
                  "cidade" => "Foz do Iguaçu",
                  "uf" => "PR");
    $pes2 = array("nome" => "Juliana do Amaral",
                  "endereco" => "Rua dos Pinheiros",
                  "cidade" => "Florianópolis",
                  "uf" => "SC");
    $pes3 = array("nome" => "Rodrigo Baidek",
                  "endereco" => "Rua Dom Pedro I",
                  "cidade" => "Petrópolis",
                  "uf" => "RJ");
    $pes4 = array("nome" => "Fabíola da Silva",
                  "endereco" => "Rua Chile",
                  "cidade" => "Guarulhos",
                  "uf" => "SP");
    
    $pessoas = array($pes1, $pes2, $pes2, $pes4);

    echo "<table border=1>";
    echo "<tr>";
    echo "<td><b>Nome</b></td>";
    echo "<td><b>Endereço</b></td>";
    echo "<td><b>Cidade</b></td>";
    echo "<td><b>UF</b></td>";
    echo "</tr>";
    
    //Solução com apenas um laço
    /*
    foreach($pessoas as $pes) {
	    echo "<tr>";
	    echo "<td>" . $pes['nome'] . "</td>";
	    echo "<td>" . $pes['endereco'] . "</td>";
	    echo "<td>" . $pes['cidade'] . "</td>";
	    echo "<td>" . $pes['uf'] . "</td>";
	    echo "</tr>";
    }
    */
    
    //Solução com dois laços
    foreach($pessoas as $pes) {
	    echo "<tr>";
	    foreach($pes as $chave => $dado)
	    	echo "<td>" . $dado . "</td>";
	    echo "</tr>";
    }

    echo "</table>";
    
?>
