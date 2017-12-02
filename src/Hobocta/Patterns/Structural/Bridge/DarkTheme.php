<?php

namespace Hobocta\Patterns\Structural\Bridge;

/**
 * Class DarkTheme
 * @package Hobocta\Patterns\Structural\Bridge
 */
class DarkTheme implements Theme
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return 'Dark Black';
    }
}
