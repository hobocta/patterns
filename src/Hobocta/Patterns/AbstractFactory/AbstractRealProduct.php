<?php

namespace Hobocta\Patterns\AbstractFactory;

/**
 * Class AbstractRealProduct
 * @package Hobocta\Patterns\AbstractFactory
 */
abstract class AbstractRealProduct extends AbstractProduct
{
    /**
     * @var int
     */
    protected $weight = 0;

    /**
     * AbstractRealProduct constructor.
     * @param $name
     * @param $weight
     */
    public function __construct($name, $weight)
    {
        parent::__construct($name);

        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
