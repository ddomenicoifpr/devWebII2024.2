<?php
#Classe DAO para o model de Usuario

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Usuario.php");

class UsuarioDAO {

    public function findByLoginSenha(string $login, string $senha) {
        $conn = Connection::getConnection();

        $sql = "SELECT * FROM usuarios 
                WHERE BINARY login = ? AND BINARY senha = ?";
        $stm = $conn->prepare($sql);    
        $stm->execute([$login, $senha]);
        $result = $stm->fetchAll();

        if(count($result) == 0)
           return null;
           
        if(count($result) > 1)
           die("Mais de um usuário encontrado para o login e senha!");

        $usuarios = $this->mapUsuarios($result);
        return $usuarios[0];
    }

    private function mapUsuarios(array $result) {
        $usuarios = array();

        foreach($result as $reg) {
            $usuario = new Usuario($reg['id'], $reg['nome'], 
                                   $reg['login'], $reg['senha']);

            array_push($usuarios, $usuario);
        }

        return $usuarios;
    }

}