<?php

class Retangulo {
    private $base;
    private $altura;

    public function getArea() {
        return $this->base * $this->altura;
    }    

    public function getPerimetro() {
        return ($this->base * 2) + ($this->altura * 2); 
    }

    /**
     * Get the value of base
     */ 
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set the value of base
     *
     * @return  self
     */ 
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }
}

echo "<h4>Retangulo 1</h4>";
$ret1 = new Retangulo();
$ret1->setBase(10);
$ret1->setAltura(12);
echo "Área: " . $ret1->getArea() . "<br>";
echo "Perímetro: " . $ret1->getPerimetro() . "<br>";

echo "<h4>Retangulo 2</h4>";
$ret2 = new Retangulo();
$ret2->setBase(5);
$ret2->setAltura(9);
echo "Área: " . $ret2->getArea() . "<br>";
echo "Perímetro: " . $ret2->getPerimetro() . "<br>";

echo "<h4>Retangulo 3</h4>";
$ret3 = new Retangulo();
$ret3->setBase(25);
$ret3->setAltura(6);
echo "Área: " . $ret3->getArea() . "<br>";
echo "Perímetro: " . $ret3->getPerimetro() . "<br>";


