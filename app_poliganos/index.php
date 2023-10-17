<?php


require __DIR__ . '/vendor/autoload.php';
use src\Poligano;
use src\poliganos\Retangulo;
use src\poliganos\Quadrado;

$poligono = new Poligano();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>area do retangolo: ' . $poligono->getArea() . '</h3>';


$poligono = new Poligano();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>area do quadrado: ' . $poligono->getArea() . '</h3>';

