<?php

namespace Hobocta\Examples;

use Hobocta\Patterns\Creational;

/**
 * Class Pattern
 * @package Hobocta\Examples
 */
class Pattern
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var \Closure
     */
    public $closure;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $result;

    /**
     * Pattern constructor.
     *
     * @param string $name
     * @param \Closure $closure
     *
     * @throws \ReflectionException
     */
    public function __construct(string $name, \Closure $closure)
    {
        $this->name = $name;
        $this->closure = $closure;
        $this->source = $this->getSource();
        $this->result = $this->getResult();
    }

    /**
     * @return string
     * @throws \ReflectionException
     */
    protected function getSource()
    {
        $reflection = new \ReflectionFunction($this->closure);

        $fileName = $reflection->getFileName();

        $startLine = $reflection->getStartLine();
        $endLine = $reflection->getEndLine() - 1;

        $length = $endLine - $startLine;

        $source = array_slice(file($fileName), $startLine, $length);

        $source = array_map(
            function ($item) {
                return preg_replace('/^\s{20}/', '', $item);
            },
            $source
        );

        return implode('', $source);
    }

    /**
     * @return string
     */
    protected function getResult()
    {
        $closure = $this->closure;

        ob_start();
        $closure();
        return ob_get_clean();
    }
}
