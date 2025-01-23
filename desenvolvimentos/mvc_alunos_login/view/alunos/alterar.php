<?php

include_once(__DIR__ . "/../../model/Aluno.php");
include_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = "";
$aluno = null;

$alunoCont = new AlunoController();

if(isset($_POST['nome'])) {
    //Se o usuário já clicou no gravar (submeteu o formulário)

    //Capturar os dados preenchidos no formulário
    $id = $_POST['id'];
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : null;
    $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : null;
    $estrang = trim($_POST['estrangeiro']) ? trim($_POST['estrangeiro']) : null;
    $curso = is_numeric($_POST['curso']) ? $_POST['curso'] : null;

    //Criar o objeto Aluno
    $aluno = new Aluno();
    $aluno->setId($id);
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrang);
    
    if($curso) {
        $cursoObj = new Curso();
        $cursoObj->setId($curso);
        $aluno->setCurso($cursoObj);
    } else
        $aluno->setCurso(null);

    //print_r($aluno);

    //Chama o controller para inserir o aluno
    $erros = $alunoCont->alterar($aluno);

    if(empty($erros)) {
        //Redireciona para a listagem
        header("location: listar.php");
        exit;
    } else
        $msgErro = implode("<br>", $erros);
} else {
    //O usuário ainda não clicou no gravar
    $id = 0;
    if(isset($_GET['id']))
        $id = $_GET['id'];

    //Carregar os dados do aluno
    $aluno = $alunoCont->buscarPorId($id);

    //Validar se o aluno existe
    if(! $aluno) {
        echo "Aluno não encontrado!<br>";
        echo "<a href='listar.php'>Voltar</a>";
        exit;
    }
}

//Incluir o formulário
include_once(__DIR__ . "/form.php");
