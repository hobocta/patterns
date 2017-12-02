<?php

namespace Hobocta\Patterns\Structural\Proxy;

/**
 * Class Security
 * @package Hobocta\Patterns\Structural\Proxy
 */
class Security
{
    /**
     * @var Door
     */
    protected $door;

    /**
     * Security constructor.
     * @param Door $door
     */
    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    /**
     * @param string $password
     */
    public function open(string $password)
    {
        if ($this->authenticate($password)) {
            $this->door->open();
        } else {
            echo 'Incorrect password';
        }
    }

    /**
     * @param string $password
     * @return bool
     */
    public function authenticate(string $password)
    {
        return $password === 'secret';
    }

    public function close()
    {
        $this->door->close();
    }
}
