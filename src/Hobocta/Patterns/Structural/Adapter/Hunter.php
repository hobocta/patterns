<?php

namespace Hobocta\Patterns\Structural\Adapter;

/**
 * Class Hunter
 * @package Hobocta\Patterns\Structural\Adapter
 */
class Hunter
{
    /**
     * @param Lion $lion
     * @return string
     */
    public function hunt(Lion $lion): string
    {
        return sprintf('— %s%s', $lion->roar(), PHP_EOL)
            . sprintf('— Shot!%s', PHP_EOL);
    }
}
