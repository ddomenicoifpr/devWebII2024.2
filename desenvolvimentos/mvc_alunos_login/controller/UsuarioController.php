<?php

require_once(__DIR__ . "/../dao/UsuarioDAO.php");
require_once(__DIR__ . "/../service/UsuarioService.php");

class UsuarioController {

    private UsuarioDAO $usuarioDAO;
    private UsuarioService $usuarioService;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();    
        $this->usuarioService = new UsuarioService();        
    }

    public function logar(string $login, string $senha) {
        $erros = $this->usuarioService->validarDadosLogin($login, $senha);

        if(! empty($erros))
            return $erros;

        //TODO - Implementar validação de login
        
        //Retorna um array vazio para indicar que tudo deu certo
        return array();
    }

}