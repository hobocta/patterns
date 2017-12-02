<?php

namespace Hobocta\Patterns\Structural\Bridge;

/**
 * Interface WebPage
 * @package Hobocta\Patterns\Structural\Bridge
 */
interface WebPage
{
    /**
     * WebPage constructor.
     * @param Theme $theme
     */
    public function __construct(Theme $theme);

    /**
     * @return string
     */
    public function getContent(): string;
}
