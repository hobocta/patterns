<?php

namespace Hobocta\Patterns\Structural\Composite;

/**
 * Interface Employee
 * @package Hobocta\Patterns\Structural\Composite
 */
interface Employee
{
    /**
     * Employee constructor.
     * @param string $name
     * @param float $salary
     */
    public function __construct(string $name, float $salary);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param float $salary
     */
    public function setSalary(float $salary);

    /**
     * @return float
     */
    public function getSalary(): float;

    /**
     * @return array
     */
    public function getRoles(): array;
}
