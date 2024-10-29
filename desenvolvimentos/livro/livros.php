<?php

include_once("persistencia.php");

//Array que armazena os livros já salvos no arquivo JSON
$livros = array();

//Verificar se o usuário já submeteu o formulário
if(isset($_POST["titulo"])) {
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $paginas = $_POST["qtdPag"];

    $id = vsprintf( '%s%s-%s-%s-%s-%s%s%s',
            str_split(bin2hex(random_bytes(16)), 4) ); 

    $livro = array("id" => $id,
                   "titulo" => $titulo,
                   "genero" => $genero,
                   "qtdPag" => $paginas);

    array_push($livros, $livro);

    //Persistência dos dados no arquivo JSON
    salvarDados($livros, "livros.json");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>

    <h1>Cadastro de livros</h1>

    <h3>Formulário</h3>

    <form method="POST" action="">
        <input type="text" name="titulo" 
            placeholder="Informe o título" >

        <br><br>

        <select name="genero">
            <option value="">---Selecione o gênero----</option>
            <option value="D">Drama</option>
            <option value="F">Ficção</option>
            <option value="R">Romance</option>
            <option value="O">Outros</option>
        </select>

        <br><br>

        <input type="number" name="qtdPag" 
            placeholder="Informe a quantidade de páginas" >

        <br><br>

        <button>Cadastrar</button>

    </form>

    <h3>Listagem</h3>
    
</body>
</html>