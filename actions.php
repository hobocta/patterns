<?php

use Hobocta\Patterns\Creational;
use Hobocta\Patterns\Structural;
use Hobocta\Patterns\Behavioral;

require_once 'src/autoload.php';

foreach (
    [
        'Порождающие' => [
            'Синглтон' => function () {
                $singleton = Creational\Singleton\Singleton::getInstance();

                echo var_export($singleton, true) . PHP_EOL;
            },
            'Абстрактная фабрика' => function () {
                $realProductsFactory = new Creational\AbstractFactory\RealProductsFactory();

                echo $realProductsFactory->createBook()->getName() . PHP_EOL;

                $virtualProductsFactory = new Creational\AbstractFactory\VirtualProductsFactory();

                echo $virtualProductsFactory->createBook()->getName() . PHP_EOL;
            },
            'Строитель' => function () {
                $burger = (new Creational\Builder\BurgerBuilder(12))
                    ->addCheese()
                    ->addLettuce()
                    ->build();

                echo var_export($burger, true) . PHP_EOL;
            },
            'Простая фабирка' => function () {
                $simpleFactory = Creational\SimpleFactory\DoorFactory::makeDoor(150, 200);

                echo var_export($simpleFactory, true) . PHP_EOL;
            },
            'Фабричный метод' => function () {
                $devManager = new Creational\FactoryMethod\DevelopmentManager();
                $devManager->takeInterview();

                $marketingManager = new Creational\FactoryMethod\MarketingManager();
                $marketingManager->takeInterview();
            },
            'Прототип' => function () {
                $original = new Creational\Prototype\Sheep('Jolly');

                echo var_export($original, true) . PHP_EOL;

                $cloned = clone $original;
                $cloned->setName('Dolly');

                echo var_export($cloned, true) . PHP_EOL;
            },
        ],
        'Структурные ' => [
            'Адаптер' => function () {
                $hunter = new Structural\Adapter\Hunter();

                $africanLion = new Structural\Adapter\AfricanLion();
                echo $hunter->hunt($africanLion);

                $asianLion = new Structural\Adapter\AsianLion();
                echo $hunter->hunt($asianLion);

                $wildDog = new Structural\Adapter\WildDog();
                $wildDogAdapter = new Hobocta\Patterns\Structural\Adapter\WildDogAdapter($wildDog);
                echo $hunter->hunt($wildDogAdapter);
            },
            'Мост' => function () {
                $darkTheme = new Structural\Bridge\DarkTheme();

                $about = new Structural\Bridge\About($darkTheme);
                echo $about->getContent() . PHP_EOL;

                $careers = new Structural\Bridge\Careers($darkTheme);
                echo $careers->getContent() . PHP_EOL;
            },
            'Компоновщик' => function () {
                $petya = new Structural\Composite\Developer('Petya', 2000);
                $oleg = new Structural\Composite\Designer('Oleg', 3000);

                $organization = new Structural\Composite\Organization;
                $organization->addEmployee($petya);
                $organization->addEmployee($oleg);

                echo $organization->getNetSalaries() . PHP_EOL;
            },
            'Декоратор' => function () {
                $coffee = new Structural\Decorator\Coffee();
                echo $coffee->getCost() . PHP_EOL;

                $milkCoffee = new Structural\Decorator\MilkCoffee($coffee);
                echo $milkCoffee->getCost() . PHP_EOL;

                $chocolateCoffee = new Structural\Decorator\ChocolateCoffee($milkCoffee);
                echo $chocolateCoffee->getCost() . PHP_EOL;
            },
            'Фасад' => function () {
                $computer = new Structural\Facade\ComputerFacade(new Structural\Facade\Computer());

                $computer->turnOn();
                $computer->turnOff();
            },
            'Приспособленец' => function () {
                $teaMaker = new Structural\Flyweight\TeaMaker();

                $shop = new Structural\Flyweight\TeaShop($teaMaker);
                $shop->takeOrder('less sugar', 1);
                $shop->takeOrder('more milk', 2);
                $shop->takeOrder('less sugar', 3);
                $shop->serve();
            },
            'Заместитель' => function () {
                $door = new Structural\Proxy\Security(new Structural\Proxy\LabDoor());
                $door->open('invalid');
                $door->open('secret');
                $door->close();
            },
        ],
        'Поведенческие' => [
            'Цепочка ответственности' => function () {
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
            },
            'Команда' => function () {
                $bulb = new Behavioral\Command\Bulb();

                $turnOn = new Behavioral\Command\TurnOn($bulb);
                $turnOff = new Behavioral\Command\TurnOff($bulb);

                $remoteControl = new Behavioral\Command\RemoteControl();
                $remoteControl->submit($turnOn);
                $remoteControl->submit($turnOff);
            },
            'Итератор' => function () {
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
            },
            'Посредник' => function () {
                $mediator = new Behavioral\Mediator\ChatRoom();

                $petya = new Behavioral\Mediator\User('Petya', $mediator);
                $oleg = new Behavioral\Mediator\User('Oleg', $mediator);

                $petya->send('Yo!');
                $oleg->send('Wow!');
            },
            'Хранитель' => function () {
                $editor = new Behavioral\Memento\Editor();

                $editor->type('Yo!');
                $editor->type('Wow!');

                $saved = $editor->save();

                $editor->type('Zzz...');

                echo $editor->getContent() . PHP_EOL;

                $editor->restore($saved);
                echo $editor->getContent() . PHP_EOL;
            },
        ],
    ] as $type => $patterns
) {
    $typeId = sprintf('collapse_%s', substr(md5($type), 0, 3));
    ?>
    <div class="row" style="margin-top: 15px;">
        <div class="col-12">
            <button
                class="btn btn-primary"
                type="button"
                data-toggle="collapse"
                data-target="#<?= $typeId ?>"
                aria-expanded="true"
                aria-controls="<?= $typeId ?>">
                <?= $type ?>
            </button>
        </div>
    </div>
    <div class="collapse" id="<?= $typeId ?>">
        <div class="row">
            <? foreach ($patterns as $name => $pattern): ?>
                <div class="col-12 col-lg-6" style="margin-top: 15px;">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?= $name ?>
                            </h4>
                            <pre class="card-text"><? $pattern() ?></pre>
                        </div>
                    </div>
                </div>
            <? endforeach ?>
        </div>
    </div>
    <?
}
