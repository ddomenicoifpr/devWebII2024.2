<?php

class Estado {
    private $nome;
    private $sigla;

    public function __toString() {
        return $this->nome . "-" . $this->sigla;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sigla
     */ 
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set the value of sigla
     *
     * @return  self
     */ 
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }
}

class Cidade {
    private $nome;
    private $qtdHabitantes;
    private $areaTerritorial;
    private $altitude;
    private $estado; //Objeto estado

    public function __construct($nome, $habit, $area, $alt, $estado) {
        $this->nome = $nome;
        $this->qtdHabitantes = $habit;
        $this->areaTerritorial = $area;
        $this->altitude = $alt;
        $this->estado = $estado;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of qtdHabitantes
     */ 
    public function getQtdHabitantes()
    {
        return $this->qtdHabitantes;
    }

    /**
     * Set the value of qtdHabitantes
     *
     * @return  self
     */ 
    public function setQtdHabitantes($qtdHabitantes)
    {
        $this->qtdHabitantes = $qtdHabitantes;

        return $this;
    }

    /**
     * Get the value of altitude
     */ 
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     *
     * @return  self
     */ 
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of areaTerritorial
     */ 
    public function getAreaTerritorial()
    {
        return $this->areaTerritorial;
    }

    /**
     * Set the value of areaTerritorial
     *
     * @return  self
     */ 
    public function setAreaTerritorial($areaTerritorial)
    {
        $this->areaTerritorial = $areaTerritorial;

        return $this;
    }

     /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
}

//Script principal
$pr = new Estado();
$pr->setSigla("PR");
$pr->setNome("Paraná");

$sc = new Estado();
$sc->setSigla("SC");
$sc->setNome("Santa Catarina");

$cid1 = new Cidade("Foz do Iguaçu", 250000, 500, 145, $pr);
$cid2 = new Cidade("Cascavel", 300000, 420, 320, $pr);
$cid3 = new Cidade("Chapecó", 240000, 120, 620, $sc);
$cid4 = new Cidade("Blumenau", 330000, 200, 85, $sc);
$cid5 = new Cidade("Curitiba", 1500000, 300, 850, $pr);

$cidades = array($cid1, $cid2, $cid3, $cid4, $cid5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela estados</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>Nome</th>
            <th>Habitantes</th>
            <th>Área</th>
            <th>Altitude</th>
            <th>Estado</th>
        </tr>
        <?php foreach($cidades as $cid): ?>
            <tr>
                <td><?= $cid->getNome() ?></td>
                <td><?= $cid->getQtdHabitantes() ?></td>
                <td><?= $cid->getAreaTerritorial() ?></td>
                <td><?= $cid->getAltitude() ?></td>
                <td><?= $cid->getEstado() ?></td> <!-- Funciona se implementer o toString na classe Estado -->
                <!--td><?= $cid->getEstado()->getNome() . "-" . $cid->getEstado()->getSigla() ?></td-->
            </tr>
        <?php endforeach; ?>    
    </table>
</body>
</html>