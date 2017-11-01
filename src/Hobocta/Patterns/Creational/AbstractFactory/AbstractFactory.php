<?php

namespace Hobocta\Patterns\Creational\AbstractFactory;

/**
 * Class AbstractFactory
 * @package Hobocta\Patterns\Creational\AbstractFactory
 */
abstract class AbstractFactory
{
    /**
     * @return ProductInterface
     */
    abstract function createBook(): ProductInterface;

    /**
     * @return ProductInterface
     */
    abstract function createMagazine(): ProductInterface;
}
