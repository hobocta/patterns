<?php

namespace Hobocta\Patterns\Structural\Adapter;

/**
 * Class WildDog
 * @package Hobocta\Patterns\Structural\Adapter
 */
class WildDog
{
    /**
     * @return string
     */
    public function bark(): string
    {
        return 'Woof!';
    }
}
