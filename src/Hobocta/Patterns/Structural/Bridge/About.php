<?php

namespace Hobocta\Patterns\Structural\Bridge;

/**
 * Class About
 * @package Hobocta\Patterns\Structural\Bridge
 */
class About extends AbstractWebPage
{
    /**
     * @return string
     */
    public function getContent(): string
    {
        return sprintf('About page in %s', $this->theme->getColor());
    }
}
