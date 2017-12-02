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
        echo 'Ouch!';
    }

    public function makeSound()
    {
        echo 'Beep beep!';
    }

    public function showLoadingScreen()
    {
        echo 'Loading...';
    }

    public function bam()
    {
        echo 'Ready to be used!';
    }

    public function closeEverything()
    {
        echo 'Bup bup bup buzz!';
    }

    public function sooth()
    {
        echo 'Zzz';
    }

    public function pullCurrent()
    {
        echo 'Hah!';
    }
}
