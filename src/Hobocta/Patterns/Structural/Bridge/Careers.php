<?php

namespace Hobocta\Patterns\Structural\Bridge;

/**
 * Class Careers
 * @package Hobocta\Patterns\Structural\Bridge
 */
class Careers extends AbstractWebPage
{
    /**
     * @return string
     */
    public function getContent(): string
    {
        return sprintf('Careers page in %s', $this->theme->getColor());
    }
}
