<?php

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Aluno.php");
include_once(__DIR__ . "/../model/Curso.php");

class AlunoDAO {

    //Método para buscar todos os alunos da base de dados
    public function list() {
        $conn = Connection::getConnection();

        $sql = "SELECT a.*, c.nome nome_curso, c.turno turno_curso 
                FROM alunos a
                JOIN cursos c ON (c.id = a.id_curso)";

        $stm = $conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        $alunos = $this->mapAlunos($result);
        return $alunos;
    }

    public function findById(int $id) {
        $conn = Connection::getConnection();

        $sql = "SELECT a.*, c.nome nome_curso, c.turno turno_curso 
                FROM alunos a
                JOIN cursos c ON (c.id = a.id_curso)
                WHERE a.id = ?";

        $stm = $conn->prepare($sql);
        $stm->execute(array($id));
        $result = $stm->fetchAll();

        $alunos = $this->mapAlunos($result);

        if(count($alunos) > 0)
            return $alunos[0];
        
        //Retorna nulo caso nenhum aluno tenha sido encontrado
        return null;
    }

    public function insert(Aluno $aluno) {
        $conn = Connection::getConnection();

        $sql = "INSERT INTO alunos (nome, idade, estrangeiro, id_curso)
                VALUES (?, ?, ?, ?)";
        $stm = $conn->prepare($sql);
        $stm->execute(array($aluno->getNome(), $aluno->getIdade(),
                            $aluno->getEstrangeiro(), 
                            $aluno->getCurso()->getId()));
    }

    public function update(Aluno $aluno) {
        $conn = Connection::getConnection();

        $sql = "UPDATE alunos 
                SET nome = ?, idade = ?, 
                    estrangeiro = ?, id_curso = ? 
                WHERE id = ?";
        $stm = $conn->prepare($sql);
        $stm->execute(array($aluno->getNome(), $aluno->getIdade(),
                            $aluno->getEstrangeiro(), 
                            $aluno->getCurso()->getId(),
                            $aluno->getId()));
    }

    public function delete(int $id) {
        $conn = Connection::getConnection();

        $sql = "DELETE FROM alunos WHERE id = ?";
        $stm = $conn->prepare($sql);
        $stm->execute(array($id));
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
            $curso->setNome($reg["nome_curso"]);
            $curso->setTurno($reg["turno_curso"]);
            $aluno->setCurso($curso);

            array_push($alunos, $aluno);
        }
        return $alunos;
    }
    
}
