<?php

namespace Hobocta\Patterns\Structural\Composite;

/**
 * Class AbstractEmployee
 * @package Hobocta\Patterns\Structural\Composite
 */
abstract class AbstractEmployee implements Employee
{
    /**
     * @var float
     */
    protected $salary;

    /**
     * @var string
     */
    protected $name;

    /**
     * Employee constructor.
     * @param string $name
     * @param float $salary
     */
    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }
}
