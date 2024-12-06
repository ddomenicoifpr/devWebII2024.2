<?php
#Classe DAO para o model de Curso

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Curso.php");

class CursoDAO {

    //Método para buscar todos os cursos da base de dados
    public function list() {
        $conn = Connection::getConnection();

        $sql = "SELECT * FROM cursos ORDER BY nome";
        $stm = $conn->prepare($sql);    
        $stm->execute();
        $result = $stm->fetchAll();

        $cursos = $this->mapCursos($result);
        return $cursos;
    }

    //Método que mapeia os registros do banco em objetos Curso
    private function mapCursos($registros) {
        $cursos = array();

        foreach($registros as $reg) {
            //Para cada registro, criar um objeto Curso
            $curso = new Curso();
            $curso->setId($reg["id"]);
            $curso->setNome($reg["nome"]);
            $curso->setTurno($reg["turno"]);

            array_push($cursos, $curso);
        }
        return $cursos;
    }

}