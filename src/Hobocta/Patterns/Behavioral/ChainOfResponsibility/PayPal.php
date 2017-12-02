<?php

namespace Hobocta\Patterns\Behavioral\ChainOfResponsibility;

/**
 * Class PayPal
 * @package Hobocta\Patterns\Behavioral\ChainOfResponsibility
 */
class PayPal extends Account
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
