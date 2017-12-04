<?php

namespace Hobocta\Patterns\Behavioral\Mediator;

/**
 * Class ChatRoom
 * @package Hobocta\Patterns\Behavioral\Mediator
 */
class ChatRoom implements ChatRoomMediator
{
    /**
     * @param User $user
     * @param string $message
     */
    public function showMessage(User $user, string $message)
    {
        $time = date('d.m.Y H:i:s');
        $sender = $user->getName();

        echo sprintf('%s [%s]: %s', $time, $sender, $message) . PHP_EOL;
    }
}
