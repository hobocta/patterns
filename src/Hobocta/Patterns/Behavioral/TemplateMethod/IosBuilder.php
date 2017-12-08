<?php

namespace Hobocta\Patterns\Behavioral\TemplateMethod;

/**
 * Class IosBuilder
 * @package Hobocta\Patterns\Behavioral\TemplateMethod
 */
class IosBuilder extends Builder
{
    protected function test()
    {
        echo 'Running ios tests' . PHP_EOL;
    }

    protected function lint()
    {
        echo 'Linting the ios code' . PHP_EOL;
    }

    protected function assemble()
    {
        echo 'Assembling the ios build' . PHP_EOL;
    }

    protected function deploy()
    {
        echo 'Deploying ios build to server' . PHP_EOL;
    }
}
