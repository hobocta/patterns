<?php

namespace Hobocta\Patterns\Structural\Composite;

/**
 * Class Developer
 * @package Hobocta\Patterns\Structural\Composite
 */
class Developer extends AbstractEmployee
{
    /**
     * @var array
     */
    protected $roles = ['developer role'];

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }
}
