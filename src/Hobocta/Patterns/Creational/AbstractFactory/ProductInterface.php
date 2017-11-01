<?php

namespace Hobocta\Patterns\Creational\AbstractFactory;

/**
 * Interface ProductInterface
 * @package Hobocta\Patterns\Creational\AbstractFactory
 */
interface ProductInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
