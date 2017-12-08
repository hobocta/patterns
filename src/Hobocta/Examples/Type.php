<?php

namespace Hobocta\Examples;

/**
 * Class Type
 * @package Hobocta\Examples
 */
class Type
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $patterns = [];

    /**
     * @var string
     */
    public $id;

    /**
     * Type constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->id = (string)substr(md5($name), 0, 3);
    }

    /**
     * @param Pattern $pattern
     * @return $this
     */
    public function add(Pattern $pattern)
    {
        $this->patterns[] = $pattern;

        return $this;
    }
}
