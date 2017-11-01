<?php

namespace Hobocta\Patterns\AbstractFactory;

/**
 * Class RealProductsFactory
 * @package Hobocta\Patterns\AbstractFactory
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
