<?php

include_once(__DIR__ . "/../../model/Aluno.php");
include_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = "";
$aluno = null;

if(isset($_POST['nome'])) {
    //Se o usuário já clicou no gravar (submeteu o formulário)

    //Capturar os dados preenchidos no formulário
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : null;
    $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : null;
    $estrang = trim($_POST['estrangeiro']) ? trim($_POST['estrangeiro']) : null;
    $curso = is_numeric($_POST['curso']) ? $_POST['curso'] : null;

    //Criar o objeto Aluno
    $aluno = new Aluno();
    $aluno->setId(0);
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
    $alunoCont = new AlunoController();
    $erros = $alunoCont->inserir($aluno);

    if(empty($erros)) {
        //Redireciona para a listagem
        header("location: listar.php");
        exit;
    } else
        $msgErro = implode("<br>", $erros);
}

//Incluir o formulário
include_once(__DIR__ . "/form.php");
