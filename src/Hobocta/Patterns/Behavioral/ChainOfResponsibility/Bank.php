<?php

namespace Hobocta\Patterns\Behavioral\ChainOfResponsibility;

/**
 * Class Bank
 * @package Hobocta\Patterns\Behavioral\ChainOfResponsibility
 */
class Bank extends Account
{
    /**
     * @var float
     */
    protected $balance;

    /**
     * Bank constructor.
     * @param float $balance
     */
    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
