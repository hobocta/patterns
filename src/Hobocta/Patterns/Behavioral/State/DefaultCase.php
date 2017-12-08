<?php

namespace Hobocta\Patterns\Behavioral\State;

/**
 * Class DefaultCase
 * @package Hobocta\Patterns\Behavioral\State
 */
class DefaultCase implements WritingState
{
    /**
     * @param string $words
     */
    public function write(string $words)
    {
        echo $words . PHP_EOL;
    }
}
