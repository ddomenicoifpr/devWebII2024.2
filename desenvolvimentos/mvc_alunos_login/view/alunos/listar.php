<?php

include_once(__DIR__ . "/../../controller/AlunoController.php");

//Carregar a lista de alunos
$alunoCont = new AlunoController();
$alunos = $alunoCont->listar();
//print_r($alunos);

//Inclusão do header da página
include_once(__DIR__ . "/../include/header.php");
?>

<h2>Listagem de alunos</h2>

<div>
    <a href="inserir.php">Inserir</a>
</div>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach($alunos as $aluno): ?>
        <tr>
            <td><?= $aluno->getNome() ?></td>
            <td><?= $aluno->getIdade() ?></td>
            <td><?= $aluno->getEstrangeiroTexto() ?></td>
            <td><?= $aluno->getCurso() ?></td>
            <td>
                <a href="alterar.php?id=<?= $aluno->getId() ?>" >
                    <img src="../../img/btn_editar.png">
                </a>
            </td>
            <td>
                <a href="excluir.php?id=<?= $aluno->getId() ?>"
                    onclick="return confirm('Confirma a exclusão do aluno?');">
                    <img src="../../img/btn_excluir.png">
                </a>
            </td>
        </tr>

    <?php endforeach; ?>

</table>
    
<?php
include_once(__DIR__ . "/../include/footer.php");
?>