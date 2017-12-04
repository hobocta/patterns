<?php

namespace Hobocta\Patterns\Behavioral\Mediator;

/**
 * Class User
 * @package Hobocta\Patterns\Behavioral\Mediator
 */
class User
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var ChatRoomMediator
     */
    protected $chatRoomMediator;

    /**
     * User constructor.
     * @param string $name
     * @param ChatRoomMediator $chatRoomMediator
     */
    public function __construct(string $name, ChatRoomMediator $chatRoomMediator)
    {
        $this->name = $name;
        $this->chatRoomMediator = $chatRoomMediator;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $message
     */
    public function send(string $message)
    {
        $this->chatRoomMediator->showMessage($this, $message);
    }
}
