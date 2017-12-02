<?php

namespace Hobocta\Patterns\Structural\Adapter;

/**
 * Class AfricanLion
 * @package Hobocta\Patterns\Structural\Adapter
 */
class AfricanLion implements Lion
{
    /**
     * @return string
     */
    public function roar(): string
    {
        return 'African roar!';
    }
}
