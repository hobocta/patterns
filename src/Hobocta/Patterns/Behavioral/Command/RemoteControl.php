<?php

namespace Hobocta\Patterns\Behavioral\Command;

/**
 * Class RemoteControl
 * @package Hobocta\Patterns\Behavioral\Command
 */
class RemoteControl
{
    /**
     * @param Command $command
     */
    public function submit(Command $command)
    {
        $command->execute();
    }
}
