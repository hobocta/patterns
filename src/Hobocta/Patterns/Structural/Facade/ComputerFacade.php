<?php

namespace Hobocta\Patterns\Structural\Facade;

/**
 * Class ComputerFacade
 * @package Hobocta\Patterns\Structural\Facade
 */
class ComputerFacade
{
    /**
     * @var Computer
     */
    protected $computer;

    /**
     * ComputerFacade constructor.
     * @param Computer $computer
     */
    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function turnOn()
    {
        $this->computer->getElectricShock();
        $this->computer->makeSound();
        $this->computer->showLoadingScreen();
        $this->computer->bam();
    }

    public function turnOff()
    {
        $this->computer->closeEverything();
        $this->computer->pullCurrent();
        $this->computer->sooth();
    }
}
