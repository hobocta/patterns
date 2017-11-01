<?php

namespace Hobocta\Patterns\AbstractFactory;

/**
 * Class VirtualProductsFactory
 * @package Hobocta\Patterns\AbstractFactory
 */
class VirtualProductsFactory extends AbstractFactory
{
    /**
     * @return VirtualProductBook
     */
    function createBook()
    {
        return new VirtualProductBook('Virtual book', 300);
    }

    /**
     * @return VirtualProductBook
     */
    function createMagazine()
    {
        return new VirtualProductBook('Virtual magazine', 400);
    }
}
