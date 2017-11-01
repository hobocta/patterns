<?php

namespace Hobocta\Patterns\Creational\SimpleFactory;

/**
 * Class DoorFactory
 * @package Hobocta\Patterns\Creational\SimpleFactory
 */
class DoorFactory
{
    /**
     * @param float $width
     * @param float $height
     * @return DoorInterface
     */
    public static function makeDoor(float $width, float $height): DoorInterface
    {
        return new WoodenDoor($width, $height);
    }
}
