<?php

namespace Hobocta\Patterns\Behavioral\Observer;

/**
 * Class JobPost
 * @package Hobocta\Patterns\Behavioral\Observer
 */
class JobPost
{
    /**
     * @var string
     */
    protected $title;

    /**
     * JobPost constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
