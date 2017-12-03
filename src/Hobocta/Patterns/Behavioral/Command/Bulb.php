<?php

namespace Hobocta\Patterns\Behavioral\Command;

/**
 * Class Bulb
 * @package Hobocta\Patterns\Behavioral\Command
 */
class Bulb
{
    public function turnOn()
    {
        echo 'Bulb has been lit' . PHP_EOL;
    }

    public function turnOff()
    {
        echo 'Darkness!' . PHP_EOL;
    }
}
