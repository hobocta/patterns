<?php

namespace Hobocta\Patterns\Behavioral\Strategy;

/**
 * Class QuickSortStrategy
 * @package Hobocta\Patterns\Behavioral\Strategy
 */
class QuickSortStrategy implements SortStrategy
{
    /**
     * @param array $dataSet
     * @return array
     */
    public function sort(array $dataSet): array
    {
        echo 'Sorting using quick sort' . PHP_EOL;

        return $dataSet;
    }
}
