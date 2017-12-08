<?php

namespace Hobocta\Patterns\Behavioral\TemplateMethod;

/**
 * Class Builder
 * @package Hobocta\Patterns\Behavioral\TemplateMethod
 */
abstract class Builder
{
    final public function build()
    {
        $this->test();
        $this->lint();
        $this->assemble();
        $this->deploy();
    }

    abstract protected function test();

    abstract protected function lint();

    abstract protected function assemble();

    abstract protected function deploy();
}
