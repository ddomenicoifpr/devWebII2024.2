<?php
#Página com o formulário de alunos

//Inclui o HEADER
require_once(__DIR__ . "/../include/header.php");

?>

<h3>FORMULÁRIO DE ALUNO</h3>

<form name="frmCadastroAlunos" method="POST" >
    <div>
        <label for="txtNome">Nome:</label>
        <input type="text" id="txtNome" name="nome" 
            size="45" maxlength="70" />
    </div>

    <div>
        <label for="txtIdade">Idade:</label>
        <input type="number" id="txtIdade" name="idade" />
    </div>

    <div >
        <label for="selEst">Estrangeiro:</label>
        <select id="selEst" name="estrangeiro">
            <option value="">---Selecione---</option>
            <option value="S">Sim</option>
            <option value="N">Não</option>
        </select>
    </div>

    <div>
        <label for="selCurso">Curso:</label>
        <select id="selCurso" name="curso">
            <option value="">---Selecione---</option>
       </select>        
    </div>

    <button type="submit">Gravar</button>
</form>

<div id="msgErro" style="color: red;">
</div>

<div>
    <a href="listar.php">Voltar</a>
</div>

<?php 
//Inclui o FOOTER
require_once(__DIR__ . "/../include/footer.php");
?>
