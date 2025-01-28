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

<div class="row">
    <div class="col-6">

        <form name="frmCadastroAlunos" method="POST">
            <div>
                <label for="txtNome" class="form-label">Nome:</label>
                <input type="text" id="txtNome" name="nome" class="form-control"
                    size="45" maxlength="70"
                    value="<?= ($aluno ? $aluno->getNome() : '') ?>" />
            </div>

            <div>
                <label for="txtIdade" class="form-label">Idade:</label>
                <input type="number" id="txtIdade" name="idade"
                    class="form-control"
                    value="<?= ($aluno ? $aluno->getIdade() : '') ?>" />
            </div>

            <div>
                <label for="selEst" class="form-label">Estrangeiro:</label>
                <select id="selEst" name="estrangeiro" class="form-control">
                    <option value="">---Selecione---</option>
                    <option value="S"
                        <?= ($aluno && $aluno->getEstrangeiro() == 'S' ? 'selected' : '') ?>>
                        Sim</option>
                    <option value="N"
                        <?= ($aluno && $aluno->getEstrangeiro() == 'N' ? 'selected' : '') ?>>
                        Não</option>
                </select>
            </div>

            <div>
                <label for="selCurso" class="form-label">Curso:</label>
                <select id="selCurso" name="curso" class="form-control">
                    <option value="">---Selecione---</option>
                    <?php foreach ($cursos as $c): ?>
                        <option value="<?= $c->getId() ?>"
                            <?= ($aluno && $aluno->getCurso() &&
                                $aluno->getCurso()->getId() == $c->getId() ? "selected" : "") ?>>
                            <?= $c ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <input type="hidden" name="id"
                value="<?= ($aluno ? $aluno->getId() : '') ?>">

            <button type="submit" class="btn btn-success mt-3">Gravar</button>
        </form>
    </div>

    <div class="col-6">
        <?php if ($msgErro): ?>
            <div id="msgErro" class="alert alert-danger">
                <?= $msgErro ?>
            </div>
        <?php endif; ?>
    </div>

</div> <!-- Fim da linha -->

<div class="mt-3">
    <a href="listar.php" class="btn btn-outline-secondary">Voltar</a>
</div>

<?php
//Inclui o FOOTER
require_once(__DIR__ . "/../include/footer.php");
?>