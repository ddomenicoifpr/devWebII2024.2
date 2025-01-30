<?php

namespace App\Dao;

use App\Util\Connection;
use App\Mapper\ClubeMapper;
use App\Model\Clube;

use \Exception;

class ClubeDAO {

    private $conn;
    private $clubeMapper;

    public function __construct() {
        $this->conn = Connection::getConnection();
        $this->clubeMapper = new ClubeMapper();
    }

    public function list() {
        $sql = 'SELECT * FROM clubes ORDER BY id';

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $this->clubeMapper->mapFromDatabaseArrayToObjectArray($result);
    }

    public function findById(int $id) {
        $sql = 'SELECT * FROM clubes WHERE id = :id';

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue("id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $arrayObj = $this->clubeMapper->mapFromDatabaseArrayToObjectArray($result);

        if(count($arrayObj) == 0)
            return null;
        else if(count($arrayObj) > 1)
            new Exception("Mais de um registro encontrado para o ID " . $id);
        else //count($arrayObj) == 1
            return $arrayObj[0];
    }

    public function insert(Clube $clube) {
        $sql = 'INSERT INTO clubes (nome, cidade, imagem) VALUES (:nome, :cidade, :imagem)';

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue("nome", $clube->getNome());
        $stmt->bindValue("cidade", $clube->getCidade());
        $stmt->bindValue("imagem", $clube->getImagem());
        $stmt->execute();

        $id = $this->conn->lastInsertId();
        $clube->setId($id);
        return $clube;
    }

    public function update(Clube $clube) {
        $sql = 'UPDATE clubes SET nome = :nome, cidade = :cidade, imagem = :imagem WHERE id = :id';

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue("nome", $clube->getNome());
        $stmt->bindValue("cidade", $clube->getCidade());
        $stmt->bindValue("imagem", $clube->getImagem());
        $stmt->bindValue("id", $clube->getId());
        $stmt->execute();

        return $clube;
    }

    public function deleteById(int $id) {
        $sql = 'DELETE FROM clubes WHERE id = :id';

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue("id", $id);
        $stmt->execute();
    }

}