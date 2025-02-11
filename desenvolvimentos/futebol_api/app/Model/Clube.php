<?php

namespace App\Model;

use \JsonSerializable;

class Clube implements JsonSerializable {

    private ?int $id;
    private ?string $nome;
    private ?string $cidade;
    private ?string $imagem;

    public function __construct() {
        $this->id = 0;
        $this->nome = null;
        $this->cidade = null;
        $this->imagem = null;
    }

    public function jsonSerialize(): array {
        return array("id" => $this->id,
                     "nome" => $this->nome,
                     "cidade" => $this->cidade,
                     "imagem" => $this->imagem);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

}