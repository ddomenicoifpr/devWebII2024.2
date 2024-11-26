<?php

include_once("Connection.php");

//Recebe os nome e cidade do time por parâmetro GET
if(! isset($_GET['nome']) || ! isset($_GET['cidade'])) {
    echo "Informe os parâmetros GET 'nome' e 'cidade'!<br>";
    echo "<a href='time_listar.php'>Voltar</a>";
    exit;
}

$nome = $_GET['nome'];
$cidade = $_GET['cidade'];

//Inserir os dados no banco de dados
$conn = Connection::getConnection();

$sql = "INSERT INTO times (nome, cidade)
        VALUES (?, ?)";

$stm = $conn->prepare($sql);
$stm->execute([$nome, $cidade]);


//Mensagem para exibir que o time foi inserido
echo "Time inserido no banco de dados!<br>";
echo "<a href='time_listar.php'>Voltar</a>";