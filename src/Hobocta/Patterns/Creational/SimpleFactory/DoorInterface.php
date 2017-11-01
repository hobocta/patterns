<?php

namespace Hobocta\Patterns\Creational\SimpleFactory;

/**
 * Interface DoorInterface
 * @package Hobocta\Patterns\Creational\SimpleFactory
 */
interface DoorInterface
{
    /**
     * @return float
     */
    public function getWidth(): float;

    /**
     * @return float
     */
    public function getHeight(): float;
}
