<?php

include_once("Connection.php");

//Capturando e validando o ID para exclusão
$id = 0;
if(isset($_GET['id']))
    $id = $_GET['id'];

if(! $id) {
    echo "ID inválido!<br>";
    echo "<a href='time_listar.php'>Voltar</a>";
    exit;
}

//Executar a exclusão no banco de dados
$conn = Connection::getConnection();

$sql = "DELETE FROM times WHERE id = ?";

$stm = $conn->prepare($sql);
$stm->execute([$id]);

//Mensagem para exibir que o time foi excluido
echo "Time excluído do banco de dados!<br>";
echo "<a href='time_listar.php'>Voltar</a>";

