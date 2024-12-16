<?php

include_once(__DIR__ . "/../dao/AlunoDAO.php");

class AlunoController {

    private AlunoDAO $alunoDao;

    public function __construct() {
        $this->alunoDao = new AlunoDAO();
    }

    public function listar() {
        $alunos = $this->alunoDao->list();
        return $alunos;
    }

    public function buscarPorId(int $id) {
        $aluno = $this->alunoDao->findById($id);
        return $aluno;
    }

    public function inserir(Aluno $aluno) {
        $this->alunoDao->insert($aluno);
    }

    public function excluir(int $id) {
        $this->alunoDao->delete($id);
    }

}