<?php

namespace Hobocta\Patterns\Structural\Adapter;

/**
 * Class AsianLion
 * @package Hobocta\Patterns\Structural\Adapter
 */
class AsianLion implements Lion
{
    /**
     * @return string
     */
    public function roar(): string
    {
        return 'Asian roar!';
    }
}
