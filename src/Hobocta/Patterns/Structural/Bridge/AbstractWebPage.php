<?php

namespace Hobocta\Patterns\Structural\Bridge;

/**
 * Class AbstractWebPage
 * @package Hobocta\Patterns\Structural\Bridge
 */
abstract class AbstractWebPage implements WebPage
{
    /**
     * @var Theme
     */
    protected $theme;

    /**
     * WebPage constructor.
     * @param Theme $theme
     */
    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }
}
