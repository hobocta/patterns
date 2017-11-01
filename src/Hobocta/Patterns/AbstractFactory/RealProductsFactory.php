<?php

namespace Hobocta\Patterns\AbstractFactory;

/**
 * Class RealProductsFactory
 * @package Hobocta\Patterns\AbstractFactory
 */
class RealProductsFactory extends AbstractFactory
{
    /**
     * @return RealProductBook
     */
    function createBook()
    {
        return new RealProductBook('Real book', 100);
    }

    /**
     * @return RealProductMagazine
     */
    function createMagazine()
    {
        return new RealProductMagazine('Real magazine', 200);
    }
}
