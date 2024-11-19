<?php

class Livro {
    private $titulo;
    private $autor;
    private $genero;
    private $qtdPag;

    public function __construct($t="", $a="", $g="", $p=0) {
        $this->titulo = $t;
        $this->autor = $a;
        $this->genero = $g;
        $this->qtdPag = $p;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of qtdPag
     */ 
    public function getQtdPag()
    {
        return $this->qtdPag;
    }

    /**
     * Set the value of qtdPag
     *
     * @return  self
     */ 
    public function setQtdPag($qtdPag)
    {
        $this->qtdPag = $qtdPag;

        return $this;
    }
}

//Script principal
$l1 = new Livro("Vidas Secas", "Graciliano", "Drama", 200);
$l2 = new Livro("Harry Potter", "JK", "Ficção", 432);
$l3 = new Livro("O alienista", "Machado de Assis", "Drama", 120);
$l4 = new Livro();
$l4->setTitulo("Iracema");
$l4->setGenero("Romance")->setAutor("José de Alencar")->setQtdPag(211);
$livros = array($l1, $l2, $l3, $l4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Gênero</th>
            <th>Páginas</th>
        </tr>
        <?php foreach($livros as $l): ?>
            <tr>
                <td><?= $l->getTitulo() ?></td>
                <td><?= $l->getAutor() ?></td>
                <td><?= $l->getGenero() ?></td>
                <td><?= $l->getQtdPag() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>



