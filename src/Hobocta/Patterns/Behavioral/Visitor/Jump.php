<?php

namespace Hobocta\Patterns\Behavioral\Visitor;

/**
 * Class Jump
 * @package Hobocta\Patterns\Behavioral\Visitor
 */
class Jump implements AnimalOperation
{
    /**
     * @param Monkey $monkey
     */
    public function visitMonkey(Monkey $monkey)
    {
        echo 'Jumped 20 feet high! on to the tree!' . PHP_EOL;
    }

    /**
     * @param Lion $lion
     */
    public function visitLion(Lion $lion)
    {
        echo 'Jumped 7 feet! Back on the ground!' . PHP_EOL;
    }

    /**
     * @param Dolphin $dolphin
     */
    public function visitDolphin(Dolphin $dolphin)
    {
        echo 'Walked on water a little and disappeared' . PHP_EOL;
    }
}
