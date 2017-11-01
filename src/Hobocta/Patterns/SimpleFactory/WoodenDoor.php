<?php

namespace Hobocta\Patterns\SimpleFactory;

/**
 * Class WoodenDoor
 * @package Hobocta\Patterns\SimpleFactory
 */
class WoodenDoor implements DoorInterface
{
    /**
     * @var float
     */
    protected $width;

    /**
     * @var float
     */
    protected $height;

    /**
     * WoodenDoor constructor.
     * @param float $width
     * @param float $height
     */
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }
}
