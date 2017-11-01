<?php

namespace Hobocta\Patterns\Creational\AbstractFactory;

/**
 * Class RealProductsFactory
 * @package Hobocta\Patterns\Creational\AbstractFactory
 */
class RealProductsFactory extends AbstractFactory
{
    /**
     * @return ProductInterface
     */
    function createBook(): ProductInterface
    {
        return new RealProductBook('Real book', 100);
    }

    /**
     * @return ProductInterface
     */
    function createMagazine(): ProductInterface
    {
        return new RealProductMagazine('Real magazine', 200);
    }
}
