<?php

namespace Hobocta\Patterns\Behavioral\ChainOfResponsibility;

/**
 * Class Account
 * @package Hobocta\Patterns\Behavioral\ChainOfResponsibility
 */
abstract class Account
{
    /**
     * @var Account|null
     */
    protected $successor = null;

    /**
     * @var float
     */
    protected $balance;

    /**
     * @param Account $account
     */
    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    /**
     * @param float $amountToPay
     * @throws \Exception
     */
    public function pay(float $amountToPay)
    {
        if ($this->canPay($amountToPay)) {
            echo sprintf('Paid %s using %s' . PHP_EOL, $amountToPay, get_called_class());
        } elseif (!is_null($this->successor)) {
            echo sprintf('Cannot pay using %s. Proceeding ...' . PHP_EOL, get_called_class());
            $this->successor->pay($amountToPay);
        } else {
            throw new \Exception('None of the accounts have enough balance');
        }
    }

    /**
     * @param $amount
     * @return bool
     */
    public function canPay($amount): bool
    {
        return $this->balance >= $amount;
    }
}
