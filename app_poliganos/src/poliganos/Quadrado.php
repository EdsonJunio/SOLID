<?php

namespace src\poliganos;

use src\poliganos\Retangulo;


class Quadrado extends Retangulo
{

    protected $largura;
    protected $altura;

    // Nos ferimos a tipagem forte de comportamento
    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function setAltura(float $altura): void
    {
        $this->largura = $altura;
        $this->altura = $altura;
    }


    public function getLargura(): float
    {
        return $this->largura;
    }


    public function getAltura(): float
    {
        return $this->altura;
    }

}