<?php

namespace Hobocta\Patterns\Behavioral\Strategy;

/**
 * Interface SortStrategy
 * @package Hobocta\Patterns\Behavioral\Strategy
 */
interface SortStrategy
{
    /**
     * @param array $dataSet
     * @return array
     */
    public function sort(array $dataSet): array;
}
