<?php

namespace Hobocta\Patterns\Structural\Flyweight;

/**
 * Class TeaMaker
 * @package Hobocta\Patterns\Structural\Flyweight
 */
class TeaMaker
{
    /**
     * @var KarakTea[]
     */
    protected $availableTea = [];

    /**
     * @param $preference
     * @return KarakTea
     */
    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new KarakTea($preference);
        }

        return $this->availableTea[$preference];
    }
}
