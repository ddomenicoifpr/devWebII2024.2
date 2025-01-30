<?php

namespace App\Service;

use App\Model\Clube;

class ClubeService {

    public function validar(Clube $clube) {
        if(! $clube->getNome())
            return "O campo nome é obrigatório.";
            
        if(! $clube->getCidade())
            return "O campo cidade é obrigatório.";
        
        if(! $clube->getImagem())
            return "O campo imagem é obrigatório.";
        
        return null;
    }
    
}