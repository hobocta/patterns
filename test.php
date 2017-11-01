<?php
require_once 'src/autoload.php';

// Синглтон
/*$singleton = \Hobocta\Patterns\Singleton\Singleton::getInstance();
echo '<pre>';
var_export($singleton);
echo '</pre>';*/

// Абстрактная фабрика
/*$realProductsFactory = new \Hobocta\Patterns\AbstractFactory\RealProductsFactory();
echo '<pre>';
var_export($realProductsFactory->createBook()->getName());
echo '</pre>';
$virtualProductsFactory = new \Hobocta\Patterns\AbstractFactory\VirtualProductsFactory();
echo '<pre>';
var_export($virtualProductsFactory->createBook()->getName());
echo '</pre>';*/

// Декоратор
/*$coffee = new \Hobocta\Patterns\Decorator\Coffee();
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
echo '</pre>';*/

// Строитель
/*$burger = (new \Hobocta\Patterns\Builder\BurgerBuilder(12))->addCheese()->addLettuce()->build();
echo '<pre>';
var_export($burger);
echo '</pre>';*/

// Простая фабирка
/*$simpleFactory = \Hobocta\Patterns\SimpleFactory\DoorFactory::makeDoor(150, 200);
echo '<pre>';
var_export($simpleFactory);
echo '</pre>';*/

// Фабричный метод
/*$devManager = new \Hobocta\Patterns\FactoryMethod\DevelopmentManager();
$devManager->takeInterview();
$marketingManager = new \Hobocta\Patterns\FactoryMethod\MarketingManager();
$marketingManager->takeInterview();*/
