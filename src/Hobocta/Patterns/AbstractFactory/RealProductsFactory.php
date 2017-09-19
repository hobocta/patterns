<?php
namespace Hobocta\Patterns\AbstractFactory;

class RealProductsFactory extends AbstractFactory
{
    function createBook()
    {
        return new RealProductBook('Real book', 100);
    }

    function createMagazine()
    {
        return new RealProductMagazine('Real magazine', 200);
    }
}
