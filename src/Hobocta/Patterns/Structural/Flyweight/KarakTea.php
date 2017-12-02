<?php

namespace Hobocta\Patterns\Structural\Flyweight;

/**
 * Class KarakTea
 * @package Hobocta\Patterns\Structural\Flyweight
 */
class KarakTea
{
    /**
     * @var string
     */
    protected $preference;

    /**
     * KarakTea constructor.
     * @param string $preference
     */
    public function __construct(string $preference)
    {
        $this->preference = $preference;
    }
}
