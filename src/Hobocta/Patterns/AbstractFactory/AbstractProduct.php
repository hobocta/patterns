<?php

namespace Hobocta\Patterns\AbstractFactory;

/**
 * Class AbstractProduct
 * @package Hobocta\Patterns\AbstractFactory
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
