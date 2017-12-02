<?php

namespace Hobocta\Patterns\Structural\Composite;

/**
 * Class Organization
 * @package Hobocta\Patterns\Structural\Composite
 */
class Organization
{
    /**
     * @var Employee[]
     */
    protected $employees;

    /**
     * @param Employee $employee
     */
    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    /**
     * @return float
     */
    public function getNetSalaries(): float
    {
        $netSalary = 0;

        foreach ($this->employees as $employee) {
            $netSalary += $employee->getSalary();
        }

        return $netSalary;
    }
}
