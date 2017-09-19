<?php
require_once 'src/autoload.php';

$singleton = \Hobocta\Patterns\Singleton\Singleton::getInstance();

echo '<pre>';
var_export($singleton);
echo '</pre>';


$realProductsFactory = new \Hobocta\Patterns\AbstractFactory\RealProductsFactory();

echo '<pre>';
var_export($realProductsFactory->createBook()->getName());
echo '</pre>';


$coffee = new \Hobocta\Patterns\Decorator\Coffee();

echo '<pre>';
var_export($coffee->getCost());
echo '</pre>';

$milkCoffee = new \Hobocta\Patterns\Decorator\MilkCoffee($coffee);

echo '<pre>';
var_export($milkCoffee->getCost());
echo '</pre>';

$chocolateCoffee = new \Hobocta\Patterns\Decorator\ChocolateCoffee($milkCoffee);

echo '<pre>';
var_export($chocolateCoffee->getCost());
echo '</pre>';
