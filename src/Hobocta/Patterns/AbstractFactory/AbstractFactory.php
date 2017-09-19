<?php
namespace Hobocta\Patterns\AbstractFactory;

abstract class AbstractFactory
{
    abstract function createBook();

    abstract function createMagazine();
}
