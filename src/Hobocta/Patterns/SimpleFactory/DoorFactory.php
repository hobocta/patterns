<?php

namespace Hobocta\Patterns\SimpleFactory;

/**
 * Class DoorFactory
 * @package Hobocta\Patterns\SimpleFactory
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
