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
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
