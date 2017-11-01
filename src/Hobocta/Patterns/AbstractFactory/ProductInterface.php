<?php

namespace Hobocta\Patterns\AbstractFactory;

/**
 * Interface ProductInterface
 * @package Hobocta\Patterns\AbstractFactory
 */
interface ProductInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
