<?php

namespace Hobocta\Patterns\Creational\Singleton;

/**
 * Class Singleton
 * @package Hobocta\Patterns\Creational\Singleton
 */
class Singleton implements SingletonInterface
{
    /**
     * @var
     */
    private static $instance;

    /**
     * @return Singleton
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    private function __clone()
    {
    }
}
