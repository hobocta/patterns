<?php

namespace Hobocta\Patterns\Behavioral\Memento;

/**
 * Class EditorMemento
 * @package Hobocta\Patterns\Behavioral\Memento
 */
class EditorMemento
{
    protected $content;

    /**
     * EditorMemento constructor.
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
