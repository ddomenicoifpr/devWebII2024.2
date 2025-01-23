<?php
#Página com o formulário de alunos


include_once(__DIR__ . "/../../controller/CursoController.php");

$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
//print_r($cursos);

//Inclui o HEADER
require_once(__DIR__ . "/../include/header.php");

?>

<h3>FORMULÁRIO DE ALUNO</h3>

<form name="frmCadastroAlunos" method="POST" >
    <div>
        <label for="txtNome">Nome:</label>
        <input type="text" id="txtNome" name="nome" 
            size="45" maxlength="70" 
            value="<?= ($aluno ? $aluno->getNome() : '') ?>" />
    </div>

    <div>
        <label for="txtIdade">Idade:</label>
        <input type="number" id="txtIdade" name="idade"
            value="<?= ($aluno ? $aluno->getIdade() : '') ?>" />
    </div>

    <div >
        <label for="selEst">Estrangeiro:</label>
        <select id="selEst" name="estrangeiro">
            <option value="">---Selecione---</option>
            <option value="S"
                <?= ($aluno && $aluno->getEstrangeiro() == 'S' ? 'selected' : '') ?> >
                 Sim</option>
            <option value="N"
                <?= ($aluno && $aluno->getEstrangeiro() == 'N' ? 'selected' : '') ?> >
                Não</option>
        </select>
    </div>

    <div>
        <label for="selCurso">Curso:</label>
        <select id="selCurso" name="curso">
            <option value="">---Selecione---</option>
            <?php foreach($cursos as $c): ?>
                <option value="<?= $c->getId() ?>" 
                    <?= ($aluno && $aluno->getCurso() && 
                        $aluno->getCurso()->getId() == $c->getId() ? "selected" : "" ) ?> >
                <?= $c ?></option>        
            <?php endforeach; ?>
       </select>        
    </div>

    <input type="hidden" name="id" 
        value="<?= ($aluno ? $aluno->getId() : '') ?>">

    <button type="submit">Gravar</button>
</form>

<?php if($msgErro): ?>
    <div id="msgErro" style="color: red;">
        <?= $msgErro ?>
    </div>
<?php endif; ?>

<div>
    <a href="listar.php">Voltar</a>
</div>

<?php 
//Inclui o FOOTER
require_once(__DIR__ . "/../include/footer.php");
?>
