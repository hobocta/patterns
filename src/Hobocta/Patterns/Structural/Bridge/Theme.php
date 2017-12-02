<?php

namespace Hobocta\Patterns\Structural\Bridge;

/**
 * Interface Theme
 * @package Hobocta\Patterns\Structural\Bridge
 */
interface Theme
{
    /**
     * @return string
     */
    public function getColor(): string;
}
