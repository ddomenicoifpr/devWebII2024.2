<?php 

namespace App\Util;

class MensagemErro {

    public static function getJSONErro($msg, $msgErro = "", $httpStatus = 500) {
        $erro['mensagem'] = $msg;
        $erro['mensagemErro'] = $msgErro;
        $erro['status'] = $httpStatus;
        return json_encode($erro);
    }

}