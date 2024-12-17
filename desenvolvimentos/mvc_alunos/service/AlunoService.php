<?php

include_once(__DIR__ . "/../model/Aluno.php");

class AlunoService {

    public function validar(Aluno $aluno) {
        $erros = array();

        if(! $aluno->getNome())
            array_push($erros, "Informe o nome!");

        if(! $aluno->getIdade())
            array_push($erros, "Informe a idade!");
        else if($aluno->getIdade() < 15)
            array_push($erros, "O aluno deve ter no mínimo 15 anos!"); 

        if(! $aluno->getEstrangeiro())
            array_push($erros, "Informe se aluno é estrangeiro!");

        if(! $aluno->getCurso())
            array_push($erros, "Informe o curso!");
        
        return $erros;
    }

}