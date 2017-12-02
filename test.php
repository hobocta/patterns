<?php
require_once 'src/autoload.php';

// Синглтон
/*$singleton = \Hobocta\Patterns\Creational\Singleton\Singleton::getInstance();
echo '<pre>';
var_export($singleton);
echo '</pre>';*/

// Абстрактная фабрика
/*$realProductsFactory = new \Hobocta\Patterns\Creational\AbstractFactory\RealProductsFactory();
echo '<pre>';
var_export($realProductsFactory->createBook()->getName());
echo '</pre>';
$virtualProductsFactory = new \Hobocta\Patterns\Creational\AbstractFactory\VirtualProductsFactory();
echo '<pre>';
var_export($virtualProductsFactory->createBook()->getName());
echo '</pre>';*/

// Декоратор
/*$coffee = new \Hobocta\Patterns\Creational\Decorator\Coffee();
echo '<pre>';
var_export($coffee->getCost());
echo '</pre>';
$milkCoffee = new \Hobocta\Patterns\Creational\Decorator\MilkCoffee($coffee);
echo '<pre>';
var_export($milkCoffee->getCost());
echo '</pre>';
$chocolateCoffee = new \Hobocta\Patterns\Creational\Decorator\ChocolateCoffee($milkCoffee);
echo '<pre>';
var_export($chocolateCoffee->getCost());
echo '</pre>';*/

// Строитель
/*$burger = (new \Hobocta\Patterns\Creational\Builder\BurgerBuilder(12))->addCheese()->addLettuce()->build();
echo '<pre>';
var_export($burger);
echo '</pre>';*/

// Простая фабирка
/*$simpleFactory = \Hobocta\Patterns\Creational\SimpleFactory\DoorFactory::makeDoor(150, 200);
echo '<pre>';
var_export($simpleFactory);
echo '</pre>';*/

// Фабричный метод
/*$devManager = new \Hobocta\Patterns\Creational\FactoryMethod\DevelopmentManager();
$devManager->takeInterview();
$marketingManager = new \Hobocta\Patterns\Creational\FactoryMethod\MarketingManager();
$marketingManager->takeInterview();*/

// Прототип
/*$original = new \Hobocta\Patterns\Creational\Prototype\Sheep('Jolly');
echo '<pre>';
var_export($original);
echo '</pre>';
$cloned = clone $original;
$cloned->setName('Dolly');
echo '<pre>';
var_export($cloned);
echo '</pre>';*/

// Адаптер
/*$hunter = new \Hobocta\Patterns\Structural\Adapter\Hunter();
$africanLion = new \Hobocta\Patterns\Structural\Adapter\AfricanLion();
echo '<pre>';
var_export($hunter->hunt($africanLion));
echo '</pre>';
$asianLion = new \Hobocta\Patterns\Structural\Adapter\AsianLion();
echo '<pre>';
var_export($hunter->hunt($africanLion));
echo '</pre>';
$wildDog = new \Hobocta\Patterns\Structural\Adapter\WildDog();
$wildDogAdapter = new Hobocta\Patterns\Structural\Adapter\WildDogAdapter($wildDog);
echo '<pre>';
var_export($hunter->hunt($wildDogAdapter));
echo '</pre>';*/
