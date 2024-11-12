<?php

include_once("persistencia.php");

//Array que armazena os livros já salvos no arquivo JSON
$livros = buscarDados("livros.json");

$msgErro = "";

$titulo = "";
$autor = "";
$genero = "";
$paginas = "";

//Verificar se o usuário já submeteu o formulário
if(isset($_POST["titulo"])) {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $genero = $_POST["genero"];
    $paginas = $_POST["qtdPag"];

    //Validar os dados informados pelo usuário
    $mensagens = array();

    if(trim($titulo) == "")
        array_push($mensagens, "Informe o título!");
    
    if(trim($autor) == "")
        array_push($mensagens, "Informe o autor!");

    if($genero == "")
        array_push($mensagens, "Informe o gênero!");

    if($paginas == "")
        array_push($mensagens, "Informe a quantidade de páginas!");

    if(! $mensagens) {
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
    } else
        $msgErro = implode("<br>", $mensagens);
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
    <!--form method="POST" action="" onsubmit="return validarDados();"-->
        <input type="text" name="titulo" id="titulo"
            placeholder="Informe o título" 
            value="<?php echo $titulo; ?>" >

        <br><br>
        
        <input type="text" name="autor" id="autor"
            placeholder="Informe o autor"
            value="<?php echo $autor; ?>" >

        <br><br>

        <select name="genero" id="genero">
            <option value="">---Selecione o gênero----</option>
            <option value="D" <?php echo ($genero == "D" ? "selected" : ""); ?> >
                Drama</option>
            <option value="F" <?php echo ($genero == "F" ? "selected" : ""); ?> >
                Ficção</option>
            <option value="R" <?php echo ($genero == "R" ? "selected" : ""); ?>>
                Romance</option>
            <option value="O" <?php echo ($genero == "O" ? "selected" : ""); ?>>
                Outros</option>
        </select>

        <br><br>

        <input type="number" name="qtdPag" id="qtdPag"
            placeholder="Informe a quantidade de páginas"
            value="<?php echo $paginas; ?>" >

        <br><br>

        <button>Cadastrar</button>

    </form>

    <div id="divMsg" style="color: red;">
        <?php echo $msgErro; ?>    
    </div>

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
                <td><a href="livros_exc.php?id=<?php echo $l['id'] ?>"
                        onclick="return confirm('Confirma a exclusão do livro?');" >
                        Excluir</a></td>
            </tr>
        <?php endforeach; ?>

    </table>
    
    <script src="validacao.js"></script>
</body>
</html>