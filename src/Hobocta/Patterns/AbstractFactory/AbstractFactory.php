<?php

namespace Hobocta\Patterns\AbstractFactory;

/**
 * Class AbstractFactory
 * @package Hobocta\Patterns\AbstractFactory
 */
abstract class AbstractFactory
{
    /**
     * @return mixed
     */
    abstract function createBook();

    /**
     * @return mixed
     */
    abstract function createMagazine();
}
