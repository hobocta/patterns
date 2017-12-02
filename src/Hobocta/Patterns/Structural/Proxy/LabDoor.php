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
        echo 'Opening lab door';
    }

    public function close()
    {
        echo 'Closing the lab door';
    }
}
