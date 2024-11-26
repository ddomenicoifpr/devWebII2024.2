<?php

//Constantes para mostrar os erros no PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Connection {

    private static $conn = null;

    public static function getConnection() {

        if(self::$conn == null) {
            //Criação da conexão com o banco de dados
            $opcoes = array(
                //Define o charset da conexão
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                //Define o tipo do erro como exceção
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //Define o retorno das consultas como
                //array associativo (campo => valor)
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );

            $strConn = "mysql:host=mysql-server;dbname=db_times";
            self::$conn = 
                new PDO($strConn, "root", "root", $opcoes);
        }

        return self::$conn;
    }

}

//Teste de conexão
//$conn = Connection::getConnection();
//print_r($conn);