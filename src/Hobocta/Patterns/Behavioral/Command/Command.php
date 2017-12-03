<?php

namespace Hobocta\Patterns\Behavioral\Command;

/**
 * Interface Command
 * @package Hobocta\Patterns\Behavioral\Command
 */
interface Command
{
    public function execute();

    public function undo();

    public function redo();
}
