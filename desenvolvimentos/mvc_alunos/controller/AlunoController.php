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

}