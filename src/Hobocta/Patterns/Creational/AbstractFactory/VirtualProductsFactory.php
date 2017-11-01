<?php

namespace Hobocta\Patterns\Creational\AbstractFactory;

/**
 * Class VirtualProductsFactory
 * @package Hobocta\Patterns\Creational\AbstractFactory
 */
class VirtualProductsFactory extends AbstractFactory
{
    /**
     * @return ProductInterface
     */
    function createBook(): ProductInterface
    {
        return new VirtualProductBook('Virtual book', 300);
    }

    /**
     * @return ProductInterface
     */
    function createMagazine(): ProductInterface
    {
        return new VirtualProductBook('Virtual magazine', 400);
    }
}
