<?php

namespace Hobocta\Patterns\AbstractFactory;

/**
 * Class AbstractFactory
 * @package Hobocta\Patterns\AbstractFactory
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
