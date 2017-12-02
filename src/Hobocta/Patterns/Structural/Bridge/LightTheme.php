<?php

namespace Hobocta\Patterns\Structural\Bridge;

/**
 * Class LightTheme
 * @package Hobocta\Patterns\Structural\Bridge
 */
class LightTheme implements Theme
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return 'Off white';
    }
}
