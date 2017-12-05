<?php

namespace Hobocta\Patterns\Behavioral\Visitor;

/**
 * Interface AnimalOperation
 * @package Hobocta\Patterns\Behavioral\Visitor
 */
interface AnimalOperation
{
    /**
     * @param Monkey $monkey
     */
    public function visitMonkey(Monkey $monkey);

    /**
     * @param Lion $lion
     */
    public function visitLion(Lion $lion);

    /**
     * @param Dolphin $dolphin
     */
    public function visitDolphin(Dolphin $dolphin);
}
