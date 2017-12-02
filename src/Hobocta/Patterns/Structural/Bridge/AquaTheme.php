<?php

namespace Hobocta\Patterns\Structural\Bridge;

/**
 * Class AquaTheme
 * @package Hobocta\Patterns\Structural\Bridge
 */
class AquaTheme implements Theme
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return 'Light blue';
    }
}
