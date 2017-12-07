<?php

namespace Hobocta\Patterns\Behavioral\Strategy;

/**
 * Class Sorter
 * @package Hobocta\Patterns\Behavioral\Strategy
 */
class Sorter
{
    protected $sorter;

    /**
     * Sorter constructor.
     * @param SortStrategy $sorter
     */
    public function __construct(SortStrategy $sorter)
    {
        $this->sorter = $sorter;
    }

    /**
     * @param array $dataSet
     * @return array
     */
    public function sort(array $dataSet): array
    {
        return $this->sorter->sort($dataSet);
    }
}
