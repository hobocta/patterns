<?php

namespace Hobocta\Patterns\Behavioral\State;

/**
 * Class LowerCase
 * @package Hobocta\Patterns\Behavioral\State
 */
class LowerCase implements WritingState
{
    /**
     * @param string $words
     */
    public function write(string $words)
    {
        echo mb_strtolower($words) . PHP_EOL;
    }
}
