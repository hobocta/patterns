<?php

namespace Hobocta\Patterns\Behavioral\Command;

/**
 * Class TurnOff
 * @package Hobocta\Patterns\Behavioral\Command
 */
class TurnOff implements Command
{
    /**
     * @var Bulb
     */
    protected $bulb;

    /**
     * TurnOff constructor.
     * @param Bulb $bulb
     */
    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOff();
    }

    public function undo()
    {
        $this->bulb->turnOn();
    }

    public function redo()
    {
        $this->execute();
    }
}
