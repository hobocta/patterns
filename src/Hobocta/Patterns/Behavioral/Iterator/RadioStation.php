<?php

namespace Hobocta\Patterns\Behavioral\Iterator;

/**
 * Class RadioStation
 * @package Hobocta\Patterns\Behavioral\Iterator
 */
class RadioStation
{
    /**
     * @var float
     */
    protected $frequency;

    /**
     * RadioStation constructor.
     * @param float $frequency
     */
    public function __construct(float $frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return float
     */
    public function getFrequency(): float
    {
        return $this->frequency;
    }
}
