<?php
#Arquivo com a declaração da classe service para Usuario

class UsuarioService {

    public function validarDadosLogin(string $login, string $senha) {
        $erros = array();

        //Validar login
        if(! $login)
            array_push($erros, "O campo [Login] é obrigatório.");

        //Validar senha
        if(! $senha)
            array_push($erros, "O campo [Senha] é obrigatório.");

        return $erros;
    }

    public function salvarUsuarioSessao(Usuario $usuario) {
        $this->habilitarSessao();

        $_SESSION['USUARIO_ID'] = $usuario->getId();
        $_SESSION['USUARIO_NOME'] = $usuario->getNome();
    }

    public function removerUsuarioSessao() {
        $this->habilitarSessao();

        session_unset();

        session_destroy();
    }

    private function habilitarSessao() {
        session_start();
    }

}