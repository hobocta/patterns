<?php

namespace Hobocta\Patterns\Behavioral\State;

/**
 * Class UpperCase
 * @package Hobocta\Patterns\Behavioral\State
 */
class UpperCase implements WritingState
{
    /**
     * @param string $words
     */
    public function write(string $words)
    {
        echo mb_strtoupper($words) . PHP_EOL;
    }
}
