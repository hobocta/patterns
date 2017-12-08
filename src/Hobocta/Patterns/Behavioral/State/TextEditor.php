<?php

namespace Hobocta\Patterns\Behavioral\State;

/**
 * Class TextEditor
 * @package Hobocta\Patterns\Behavioral\State
 */
class TextEditor
{
    /**
     * @var WritingState
     */
    protected $state;

    /**
     * TextEditor constructor.
     * @param WritingState $state
     */
    public function __construct(WritingState $state)
    {
        $this->state = $state;
    }

    /**
     * @param WritingState $state
     */
    public function setState(WritingState $state)
    {
        $this->state = $state;
    }

    /**
     * @param string $words
     */
    public function type(string $words)
    {
        $this->state->write($words);
    }
}
