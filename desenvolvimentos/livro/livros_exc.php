<?php

include_once("persistencia.php");

//1- Capturar o ID recebido por GET
$id = "";
if(isset($_GET['id']))
    $id = $_GET['id'];

//1.1- Validar se o ID foi enviado na requisição
if(! $id) {
    echo "ID do livro não informado!<br>";
    echo "<a href='livros.php'>Voltar</a>";
    exit;
}

//2- Carregar os livros do arquivo JSON como um array
$livros = buscarDados("livros.json");
//print_r($livros);

//3- Encontrar o índice do livro no array (procurar pelo ID recebido)
$idxLivroExcluir = -1;
for($i=0; $i<count($livros); $i++) {
    if($livros[$i]['id'] == $id) {
        $idxLivroExcluir = $i;
        break;
    }
}

//3.1- Validar se o ID corresponde a um dos livros salvo no JSON
if($idxLivroExcluir < 0) {
    echo "ID do livro não encontrado!<br>";
    echo "<a href='livros.php'>Voltar</a>";
    exit;
}

//4- Excluir o livro do array
array_splice($livros, $idxLivroExcluir, 1);

//5- Salvar o array como JSON
salvarDados($livros, "livros.json");

//6- Redirecionar para o formulário de livros
header("location: livros.php");