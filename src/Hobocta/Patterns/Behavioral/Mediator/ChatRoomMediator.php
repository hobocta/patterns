<?php

namespace Hobocta\Patterns\Behavioral\Mediator;

/**
 * Interface ChatRoomMediator
 * @package Hobocta\Patterns\Behavioral\Mediator
 */
interface ChatRoomMediator
{
    /**
     * @param User $user
     * @param string $message
     */
    public function showMessage(User $user, string $message);
}
