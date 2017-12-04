<?php

namespace Hobocta\Patterns\Behavioral\Memento;

/**
 * Class Editor
 * @package Hobocta\Patterns\Behavioral\Memento
 */
class Editor
{
    /**
     * @var string
     */
    protected $content = '';

    /**
     * @param string $words
     */
    public function type(string $words)
    {
        $this->content = sprintf('%s %s', $this->content, $words);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return EditorMemento
     */
    public function save()
    {
        return new EditorMemento($this->content);
    }

    /**
     * @param EditorMemento $memento
     */
    public function restore(EditorMemento $memento)
    {
        $this->content = $memento->getContent();
    }
}
