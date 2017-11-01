<?php

namespace Hobocta\Patterns\SimpleFactory;

/**
 * Interface DoorInterface
 * @package Hobocta\Patterns\SimpleFactory
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
