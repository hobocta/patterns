<?php

namespace Hobocta\Patterns\Behavioral\Command;

/**
 * Class TurnOn
 * @package Hobocta\Patterns\Behavioral\Command
 */
class TurnOn implements Command
{
    /**
     * @var Bulb
     */
    protected $bulb;

    /**
     * TurnOn constructor.
     * @param Bulb $bulb
     */
    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOn();
    }

    public function undo()
    {
        $this->bulb->turnOff();
    }

    public function redo()
    {
        $this->execute();
    }
}
