<?php

namespace Hobocta\Patterns\Structural\Composite;

/**
 * Class Designer
 * @package Hobocta\Patterns\Structural\Composite
 */
class Designer extends AbstractEmployee
{
    /**
     * @var array
     */
    protected $roles = ['designer role'];

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }
}
