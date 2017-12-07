<?php

namespace Hobocta\Patterns\Behavioral\Strategy;

/**
 * Class BubbleSortStrategy
 * @package Hobocta\Patterns\Behavioral\Strategy
 */
class BubbleSortStrategy implements SortStrategy
{
    /**
     * @param array $dataSet
     * @return array
     */
    public function sort(array $dataSet): array
    {
        echo 'Sorting using bubble sort' . PHP_EOL;

        return $dataSet;
    }
}
