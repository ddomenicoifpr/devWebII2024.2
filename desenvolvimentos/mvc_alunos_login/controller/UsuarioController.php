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

        //Validação de login
        $usuario = $this->usuarioDAO->
                        findByLoginSenha($login, $senha);
        
        //Caso não encontre o usuário, retorna o erro
        if($usuario == null) {
            array_push($erros, "Login ou senha inválidos!");
            return $erros;
        }

        //Salvar o usuário na sessão
        $this->usuarioService->salvarUsuarioSessao($usuario);
        
        //Retorna um array vazio para indicar que tudo deu certo
        return array();
    }

    public function deslogar() {
        $this->usuarioService->removerUsuarioSessao();
    }

}