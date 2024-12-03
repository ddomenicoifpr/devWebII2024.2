<?php

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Aluno.php");
include_once(__DIR__ . "/../model/Curso.php");

class AlunoDAO {

    //Método para buscar todos os alunos da base de dados
    public function list() {
        $conn = Connection::getConnection();

        $sql = "SELECT * FROM alunos";

        $stm = $conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        $alunos = $this->mapAlunos($result);
        return $alunos;
    }

    //Método que mapeia os registros do banco em objetos Aluno
    private function mapAlunos($registros) {
        $alunos = array();

        foreach($registros as $reg) {
            //Para cada registro, criar um objeto Aluno
            $aluno = new Aluno();
            $aluno->setId($reg["id"]);
            $aluno->setNome($reg["nome"]);
            $aluno->setIdade($reg["idade"]);
            $aluno->setEstrangeiro($reg["estrangeiro"]);

            $curso = new Curso();
            $curso->setId($reg["id_curso"]);
            $aluno->setCurso($curso);

            array_push($alunos, $aluno);
        }
        return $alunos;
    }
    
}
