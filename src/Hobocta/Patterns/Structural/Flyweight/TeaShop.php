<?php

namespace Hobocta\Patterns\Structural\Flyweight;

/**
 * Class TeaShop
 * @package Hobocta\Patterns\Structural\Flyweight
 */
class TeaShop
{
    /**
     * @var KarakTea[]
     */
    protected $orders;

    /**
     * @var TeaMaker
     */
    protected $teaMaker;

    /**
     * TeaShop constructor.
     * @param TeaMaker $teaMaker
     */
    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    /**
     * @param string $teaType
     * @param int $table
     */
    public function takeOrder(string $teaType, int $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve()
    {
        foreach ($this->orders as $table => $tea) {
            echo sprintf('Serving tea to table #%s', $table);
        }
    }
}
