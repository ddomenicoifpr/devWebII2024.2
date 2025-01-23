<?php

include_once(__DIR__ . "/../dao/AlunoDAO.php");
include_once(__DIR__ . "/../service/AlunoService.php");

class AlunoController {

    private AlunoDAO $alunoDao;
    private AlunoService $alunoService;

    public function __construct() {
        $this->alunoDao = new AlunoDAO();
        $this->alunoService = new AlunoService();
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
        $erros = $this->alunoService->validar($aluno);
        if($erros)
            return $erros;

        $this->alunoDao->insert($aluno);
        return array();
    }

    public function alterar(Aluno $aluno) {
        $erros = $this->alunoService->validar($aluno);
        if($erros)
            return $erros;

        $this->alunoDao->update($aluno);
        return array();
    }

    public function excluir(int $id) {
        $this->alunoDao->delete($id);
    }

}