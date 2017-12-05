<?php

namespace Hobocta\Patterns\Behavioral\Visitor;

/**
 * Class Speak
 * @package Hobocta\Patterns\Behavioral\Visitor
 */
class Speak implements AnimalOperation
{
    /**
     * @param Monkey $monkey
     */
    public function visitMonkey(Monkey $monkey)
    {
        $monkey->shout();
    }

    /**
     * @param Lion $lion
     */
    public function visitLion(Lion $lion)
    {
        $lion->roar();
    }

    /**
     * @param Dolphin $dolphin
     */
    public function visitDolphin(Dolphin $dolphin)
    {
        $dolphin->speak();
    }
}
