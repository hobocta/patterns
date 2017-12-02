<?php

namespace Hobocta\Patterns\Structural\Proxy;

/**
 * Class LabDoor
 * @package Hobocta\Patterns\Structural\Proxy
 */
class LabDoor implements Door
{
    public function open()
    {
        echo 'Opening lab door' . PHP_EOL;
    }

    public function close()
    {
        echo 'Closing the lab door' . PHP_EOL;
    }
}
