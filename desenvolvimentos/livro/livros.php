<?php

include_once("persistencia.php");

//Array que armazena os livros já salvos no arquivo JSON
$livros = buscarDados("livros.json");

//Verificar se o usuário já submeteu o formulário
if(isset($_POST["titulo"])) {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $genero = $_POST["genero"];
    $paginas = $_POST["qtdPag"];

    $id = vsprintf( '%s%s-%s-%s-%s-%s%s%s',
            str_split(bin2hex(random_bytes(16)), 4) ); 

    $livro = array("id" => $id,
                   "titulo" => $titulo,
                   "autor" => $autor,
                   "genero" => $genero,
                   "qtdPag" => $paginas);

    array_push($livros, $livro);

    //Persistência dos dados no arquivo JSON
    salvarDados($livros, "livros.json");

    //Redirecionar para evitar o reenvio do formulário
    header("location: livros.php");
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
        
        <input type="text" name="autor" 
            placeholder="Informe o autor" >

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

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Gênero</th>
            <th>Páginas</th>
            <th></th>
        </tr>

        <!-- Dados dos livros -->
        <?php foreach($livros as $l): ?>
            <tr>
                <td><?php echo $l["id"]; ?></td>
                <td><?php echo $l["titulo"]; ?></td>
                <td><?php echo $l["autor"]; ?></td>
                <td>
                    <?php 
                        switch($l["genero"]) {
                            case "D":
                                echo "Drama";
                                break;

                            case "F":
                                echo "Ficção";
                                break;

                            case "R":
                                echo "Romance";
                                break;

                            case "O":
                                echo "Outros";
                                break;

                            default:
                                echo $l["genero"];

                        } 
                    ?>
                </td>
                <td><?php echo $l["qtdPag"]; ?></td>
                <td><a href="livros_exc.php?id=<?php echo $l['id'] ?>">
                        Excluir</a></td>
            </tr>
        <?php endforeach; ?>

    </table>
    
</body>
</html>