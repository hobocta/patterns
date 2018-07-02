<?php

use Hobocta\Examples\Pattern;
use Hobocta\Examples\Type;
use Hobocta\Patterns\Creational;
use Hobocta\Patterns\Structural;
use Hobocta\Patterns\Behavioral;

try {
    return [
        (new Type('Порождающие'))
            ->add(new Pattern(
                'Фабричный метод',
                function () {
                    $devManager = new Creational\FactoryMethod\DevelopmentManager();
                    $devManager->takeInterview();

                    $marketingManager = new Creational\FactoryMethod\MarketingManager();
                    $marketingManager->takeInterview();
                }
            ))
            ->add(new Pattern(
                'Абстрактная фабрика',
                function () {
                    $realProductsFactory = new Creational\AbstractFactory\RealProductsFactory();

                    echo $realProductsFactory->createBook()->getName() . PHP_EOL;

                    $virtualProductsFactory = new Creational\AbstractFactory\VirtualProductsFactory();

                    echo $virtualProductsFactory->createBook()->getName() . PHP_EOL;
                }
            ))
            ->add(new Pattern(
                'Строитель',
                function () {
                    $burger = (new Creational\Builder\BurgerBuilder(12))
                        ->addCheese()
                        ->addLettuce()
                        ->build();

                    echo var_export($burger, true) . PHP_EOL;
                }
            ))
            ->add(new Pattern(
                'Простая фабрика',
                function () {
                    $simpleFactory = Creational\SimpleFactory\DoorFactory::makeDoor(150, 200);

                    echo var_export($simpleFactory, true) . PHP_EOL;
                }
            ))
            ->add(new Pattern(
                'Прототип',
                function () {
                    $original = new Creational\Prototype\Sheep('Jolly');

                    echo var_export($original, true) . PHP_EOL;

                    $cloned = clone $original;
                    $cloned->setName('Dolly');

                    echo var_export($cloned, true) . PHP_EOL;
                }
            ))
            ->add(new Pattern(
                'Синглтон (одночка)',
                function () {
                    $singleton = Creational\Singleton\Singleton::getInstance();

                    echo var_export($singleton, true) . PHP_EOL;
                }
            )),

        (new Type('Структурные'))
            ->add(new Pattern(
                'Адаптер',
                function () {
                    $hunter = new Structural\Adapter\Hunter();

                    $africanLion = new Structural\Adapter\AfricanLion();
                    echo $hunter->hunt($africanLion);

                    $asianLion = new Structural\Adapter\AsianLion();
                    echo $hunter->hunt($asianLion);

                    $wildDog        = new Structural\Adapter\WildDog();
                    $wildDogAdapter = new Hobocta\Patterns\Structural\Adapter\WildDogAdapter($wildDog);
                    echo $hunter->hunt($wildDogAdapter);
                }
            ))
            ->add(new Pattern(
                'Мост',
                function () {
                    $darkTheme = new Structural\Bridge\DarkTheme();

                    $about = new Structural\Bridge\About($darkTheme);
                    echo $about->getContent() . PHP_EOL;

                    $careers = new Structural\Bridge\Careers($darkTheme);
                    echo $careers->getContent() . PHP_EOL;
                }
            ))
            ->add(new Pattern(
                'Компоновщик',
                function () {
                    $petya = new Structural\Composite\Developer('Petya', 2000);
                    $oleg  = new Structural\Composite\Designer('Oleg', 3000);

                    $organization = new Structural\Composite\Organization;
                    $organization->addEmployee($petya);
                    $organization->addEmployee($oleg);

                    echo $organization->getNetSalaries() . PHP_EOL;
                }
            ))
            ->add(new Pattern(
                'Декоратор (обёртка)',
                function () {
                    $coffee = new Structural\Decorator\Coffee();
                    echo $coffee->getCost() . PHP_EOL;

                    $milkCoffee = new Structural\Decorator\MilkCoffee($coffee);
                    echo $milkCoffee->getCost() . PHP_EOL;

                    $chocolateCoffee = new Structural\Decorator\ChocolateCoffee($milkCoffee);
                    echo $chocolateCoffee->getCost() . PHP_EOL;
                }
            ))
            ->add(new Pattern(
                'Фасад',
                function () {
                    $computer = new Structural\Facade\ComputerFacade(new Structural\Facade\Computer());

                    $computer->turnOn();
                    $computer->turnOff();
                }
            ))
            ->add(new Pattern(
                'Приспособленец (легковес)',
                function () {
                    $teaMaker = new Structural\Flyweight\TeaMaker();

                    $shop = new Structural\Flyweight\TeaShop($teaMaker);
                    $shop->takeOrder('less sugar', 1);
                    $shop->takeOrder('more milk', 2);
                    $shop->takeOrder('less sugar', 3);
                    $shop->serve();
                }
            ))
            ->add(new Pattern(
                'Заместитель',
                function () {
                    $door = new Structural\Proxy\Security(new Structural\Proxy\LabDoor());
                    $door->open('invalid');
                    $door->open('secret');
                    $door->close();
                }
            )),
        (new Type('Поведенческие'))
            ->add(new Pattern(
                'Цепочка ответственности (обязанностей)',
                function () {
                    $bitcoin = new Behavioral\ChainOfResponsibility\Bitcoin(300);

                    $payPal = new Behavioral\ChainOfResponsibility\PayPal(200);
                    $payPal->setNext($bitcoin);

                    $bank = new Behavioral\ChainOfResponsibility\Bank(100);
                    $bank->setNext($payPal);

                    try {
                        $bank->pay(2591);
                    } catch (Exception $e) {
                        echo $e->getMessage() . PHP_EOL;
                    }
                }
            ))
            ->add(new Pattern(
                'Команда',
                function () {
                    $bulb = new Behavioral\Command\Bulb();

                    $turnOn  = new Behavioral\Command\TurnOn($bulb);
                    $turnOff = new Behavioral\Command\TurnOff($bulb);

                    $remoteControl = new Behavioral\Command\RemoteControl();
                    $remoteControl->submit($turnOn);
                    $remoteControl->submit($turnOff);
                }
            ))
            ->add(new Pattern(
                'Итератор',
                function () {
                    $stationsList = new Behavioral\Iterator\StationList();

                    $stationsList->addStation(new Behavioral\Iterator\RadioStation(101.1));
                    $stationsList->addStation(new Behavioral\Iterator\RadioStation(102.2));
                    $stationsList->addStation(new Behavioral\Iterator\RadioStation(103.3));

                    echo sprintf('count %s', $stationsList->count()) . PHP_EOL;
                    foreach ($stationsList as $station) {
                        echo $station->getFrequency() . PHP_EOL;
                    }

                    $stationsList->removeStation(new Behavioral\Iterator\RadioStation(101.1));

                    echo sprintf('count %s', $stationsList->count()) . PHP_EOL;
                    foreach ($stationsList as $station) {
                        echo $station->getFrequency() . PHP_EOL;
                    }
                }
            ))
            ->add(new Pattern(
                'Посредник',
                function () {
                    $mediator = new Behavioral\Mediator\ChatRoom();

                    $petya = new Behavioral\Mediator\User('Petya', $mediator);
                    $oleg  = new Behavioral\Mediator\User('Oleg', $mediator);

                    $petya->send('Yo!');
                    $oleg->send('Wow!');
                }
            ))
            ->add(new Pattern(
                'Хранитель (снимок)',
                function () {
                    $editor = new Behavioral\Memento\Editor();

                    $editor->type('Yo!');
                    $editor->type('Wow!');

                    $saved = $editor->save();

                    $editor->type('Zzz...');

                    echo $editor->getContent() . PHP_EOL;

                    $editor->restore($saved);
                    echo $editor->getContent() . PHP_EOL;
                }
            ))
            ->add(new Pattern(
                'Наблюдатель',
                function () {
                    $petya = new Behavioral\Observer\JobSeeker('Petya');
                    $oleg  = new Behavioral\Observer\JobSeeker('Oleg');

                    $jobPostings = new Behavioral\Observer\JobPostings();
                    $jobPostings->attach($petya);
                    $jobPostings->attach($oleg);

                    $jobPostings->addJob(new Behavioral\Observer\JobPost('Developer'));
                    $jobPostings->addJob(new Behavioral\Observer\JobPost('Manager'));
                }
            ))
            ->add(new Pattern(
                'Состояние',
                function () {
                    $editor = new Behavioral\State\TextEditor(new Behavioral\State\DefaultCase());

                    $editor->type('Обычный текст');

                    $editor->setState(new Behavioral\State\UpperCase());

                    $editor->type('Капс');
                    $editor->type('Капс-капс');

                    $editor->setState(new Behavioral\State\LowerCase());

                    $editor->type('Строчный текст');
                }
            ))
            ->add(new Pattern(
                'Стратегия',
                function () {
                    $dataSet = [1, 5, 4, 3, 2, 8];

                    $sorter = new Behavioral\Strategy\Sorter(new Behavioral\Strategy\BubbleSortStrategy());
                    $sorter->sort($dataSet);

                    $sorter = new Behavioral\Strategy\Sorter(new Behavioral\Strategy\QuickSortStrategy());
                    $sorter->sort($dataSet);
                }
            ))
            ->add(new Pattern(
                'Шаблонный метод',
                function () {
                    $androidBuilder = new Behavioral\TemplateMethod\AndroidBuilder();
                    $androidBuilder->build();

                    $iosBuilder = new Behavioral\TemplateMethod\IosBuilder();
                    $iosBuilder->build();
                }
            ))
            ->add(new Pattern(
                'Посетитель',
                function () {
                    $monkey  = new Behavioral\Visitor\Monkey();
                    $lion    = new Behavioral\Visitor\Lion();
                    $dolphin = new Behavioral\Visitor\Dolphin();

                    $speak = new Behavioral\Visitor\Speak();
                    $jump  = new Behavioral\Visitor\Jump();

                    $monkey->accept($speak);
                    $monkey->accept($jump);

                    $lion->accept($speak);
                    $lion->accept($jump);

                    $dolphin->accept($speak);
                    $dolphin->accept($jump);
                }
            ))
    ];
} catch (ReflectionException $e) {
    die(sprintf('Exception message: %s (%s:%s)', $e->getMessage(), $e->getFile(), $e->getLine()));
}
