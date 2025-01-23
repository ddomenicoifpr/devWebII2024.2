<?php 
#Página para excluir um aluno

require_once(__DIR__ . "/../../controller/AlunoController.php");

//Captura o parâmetro GET com o ID do aluno
$id = 0;
if(isset($_GET['id']) && is_numeric($_GET['id']))
    $id = $_GET['id'];

//Verifica se o aluno existe
$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($id);

if($aluno) {
    //Excluir
    $erros = $alunoCont->excluir($id);

    //Redirecionar
    header("location: listar.php");
    exit;

} else {
    echo "Aluno não encontrado!<br>";
    echo "<a href='listar.php'>Voltar</a>";
}


