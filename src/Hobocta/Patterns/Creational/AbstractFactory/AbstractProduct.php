<?php

namespace Hobocta\Patterns\Creational\AbstractFactory;

/**
 * Class AbstractProduct
 * @package Hobocta\Patterns\Creational\AbstractFactory
 */
abstract class AbstractProduct implements ProductInterface
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * AbstractProduct constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
