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
     * @param string $name
     * @param float $weight
     */
    public function __construct(string $name, int $weight)
    {
        parent::__construct($name);

        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }
}
