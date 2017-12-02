<?php

namespace Hobocta\Patterns\Behavioral\ChainOfResponsibility;

/**
 * Class Bitcoin
 * @package Hobocta\Patterns\Behavioral\ChainOfResponsibility
 */
class Bitcoin extends Account
{
    /**
     * @var float
     */
    protected $balance;

    /**
     * PayPal constructor.
     * @param float $balance
     */
    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
