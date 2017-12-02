<?php

namespace Hobocta\Patterns\Structural\Facade;

/**
 * Class Computer
 * @package Hobocta\Patterns\Structural\Facade
 */
class Computer
{
    public function getElectricShock()
    {
        echo 'Ouch!' . PHP_EOL;
    }

    public function makeSound()
    {
        echo 'Beep beep!' . PHP_EOL;
    }

    public function showLoadingScreen()
    {
        echo 'Loading...' . PHP_EOL;
    }

    public function bam()
    {
        echo 'Ready to be used!' . PHP_EOL;
    }

    public function closeEverything()
    {
        echo 'Bup bup bup buzz!' . PHP_EOL;
    }

    public function sooth()
    {
        echo 'Zzz' . PHP_EOL;
    }

    public function pullCurrent()
    {
        echo 'Hah!' . PHP_EOL;
    }
}
