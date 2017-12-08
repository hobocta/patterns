<?php

namespace Hobocta\Patterns\Behavioral\TemplateMethod;

/**
 * Class AndroidBuilder
 * @package Hobocta\Patterns\Behavioral\TemplateMethod
 */
class AndroidBuilder extends Builder
{
    protected function test()
    {
        echo 'Running android tests' . PHP_EOL;
    }

    protected function lint()
    {
        echo 'Linting the android code' . PHP_EOL;
    }

    protected function assemble()
    {
        echo 'Assembling the android build' . PHP_EOL;
    }

    protected function deploy()
    {
        echo 'Deploying android build to server' . PHP_EOL;
    }
}
