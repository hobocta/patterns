<?php
namespace Hobocta\Patterns\AbstractFactory;

class VirtualProductsFactory extends AbstractFactory
{
    function createBook()
    {
        return new VirtualProductBook('Virtual book', 300);
    }

    function createMagazine()
    {
        return new VirtualProductBook('Virtual magazine', 400);
    }
}
