<?php

namespace Hobocta\Patterns\AbstractFactory;

/**
 * Class VirtualProductsFactory
 * @package Hobocta\Patterns\AbstractFactory
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
