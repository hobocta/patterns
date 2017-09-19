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
