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

// Мост
/*$darkTheme = new \Hobocta\Patterns\Structural\Bridge\DarkTheme();
$about = new \Hobocta\Patterns\Structural\Bridge\About($darkTheme);
echo '<pre>';
var_export($about->getContent());
echo '</pre>';
$careers = new \Hobocta\Patterns\Structural\Bridge\Careers($darkTheme);
echo '<pre>';
var_export($careers->getContent());
echo '</pre>';*/

// Компоновщик
/*$petya = new \Hobocta\Patterns\Structural\Composite\Developer('Petya', 2000);
$oleg = new \Hobocta\Patterns\Structural\Composite\Designer('Oleg', 3000);
$organization = new \Hobocta\Patterns\Structural\Composite\Organization;
$organization->addEmployee($petya);
$organization->addEmployee($oleg);
echo '<pre>';
var_export($organization->getNetSalaries());
echo '</pre>';*/

// Декоратор
/*$coffee = new \Hobocta\Patterns\Structural\Decorator\Coffee();
echo '<pre>';
var_export($coffee->getCost());
echo '</pre>';
$milkCoffee = new \Hobocta\Patterns\Structural\Decorator\MilkCoffee($coffee);
echo '<pre>';
var_export($milkCoffee->getCost());
echo '</pre>';
$chocolateCoffee = new \Hobocta\Patterns\Structural\Decorator\ChocolateCoffee($milkCoffee);
echo '<pre>';
var_export($chocolateCoffee->getCost());
echo '</pre>';*/

// Фасад
/*$computer = new \Hobocta\Patterns\Structural\Facade\ComputerFacade(
    new \Hobocta\Patterns\Structural\Facade\Computer()
);
echo '<pre>';
$computer->turnOn();
$computer->turnOff();
echo '</pre>';*/

// Приспособленец
/*$teaMaker = new \Hobocta\Patterns\Structural\Flyweight\TeaMaker();
$shop = new \Hobocta\Patterns\Structural\Flyweight\TeaShop($teaMaker);
$shop->takeOrder('less sugar', 1);
$shop->takeOrder('more milk', 2);
$shop->takeOrder('less sugar', 3);
echo '<pre>';
$shop->serve();
echo '</pre>';*/

// Заместитель
/*$door = new \Hobocta\Patterns\Structural\Proxy\Security(
    new \Hobocta\Patterns\Structural\Proxy\LabDoor()
);
echo '<pre>';
$door->open('invalid');
$door->open('secret');
$door->close();
echo '</pre>';*/

// Цепочка ответственности
/*$bitcoin = new \Hobocta\Patterns\Behavioral\ChainOfResponsibility\Bitcoin(300);
$payPal = new \Hobocta\Patterns\Behavioral\ChainOfResponsibility\PayPal(200);
$payPal->setNext($bitcoin);
$bank = new \Hobocta\Patterns\Behavioral\ChainOfResponsibility\Bank(100);
$bank->setNext($payPal);
echo '<pre>';
try {
    $bank->pay(2591);
} catch (Exception $e) {
    echo $e->getMessage();
}
echo '</pre>';*/

// Команда
/*$bulb = new \Hobocta\Patterns\Behavioral\Command\Bulb();
$turnOn = new \Hobocta\Patterns\Behavioral\Command\TurnOn($bulb);
$turnOff = new \Hobocta\Patterns\Behavioral\Command\TurnOff($bulb);
$remoteControl = new \Hobocta\Patterns\Behavioral\Command\RemoteControl();
echo '<pre>';
$remoteControl->submit($turnOn);
$remoteControl->submit($turnOff);
echo '</pre>';*/

// Итератор
$stationsList = new \Hobocta\Patterns\Behavioral\Iterator\StationList();
$stationsList->addStation(new \Hobocta\Patterns\Behavioral\Iterator\RadioStation(101.1));
$stationsList->addStation(new \Hobocta\Patterns\Behavioral\Iterator\RadioStation(102.2));
$stationsList->addStation(new \Hobocta\Patterns\Behavioral\Iterator\RadioStation(103.3));
echo '<pre>';
echo sprintf('count %s', $stationsList->count()) . PHP_EOL;
foreach ($stationsList as $station) {
    echo $station->getFrequency() . PHP_EOL;
}
$stationsList->removeStation(new \Hobocta\Patterns\Behavioral\Iterator\RadioStation(101.1));
echo sprintf('count %s', $stationsList->count()) . PHP_EOL;
foreach ($stationsList as $station) {
    echo $station->getFrequency() . PHP_EOL;
}
echo '</pre>';
