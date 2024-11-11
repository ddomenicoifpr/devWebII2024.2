<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('DIR_ARQUIVOS', "arquivos");

function salvarDados(array $dados, string $nomeArquivo) {
    $json = json_encode($dados, JSON_PRETTY_PRINT);

    file_put_contents(DIR_ARQUIVOS . "/" . $nomeArquivo, $json);   
}

function buscarDados(string $nomeArquivo) {
    $dados = array();

    //Rotina para ler o arquivo JSON
    $caminhoArquivo = DIR_ARQUIVOS . "/" . $nomeArquivo;
    if(file_exists($caminhoArquivo)) {
        $json = file_get_contents($caminhoArquivo);

        $dados = json_decode($json, true);
        //print_r($dados);
    }

    return $dados;
}
