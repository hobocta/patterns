<?php

namespace Hobocta\Patterns\Behavioral\State;

/**
 * Interface WritingState
 * @package Hobocta\Patterns\Behavioral\State
 */
interface WritingState
{
    /**
     * @param string $words
     */
    public function write(string $words);
}
