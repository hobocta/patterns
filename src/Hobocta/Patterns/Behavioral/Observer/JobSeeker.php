<?php

namespace Hobocta\Patterns\Behavioral\Observer;

/**
 * Class JobSeeker
 * @package Hobocta\Patterns\Behavioral\Observer
 */
class JobSeeker implements Observer
{
    /**
     * @var string
     */
    protected $name;

    /**
     * JobSeeker constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param JobPost $job
     */
    public function onJobPosted(JobPost $job)
    {
        echo sprintf('Hi %s! New job posted: %s', $this->name, $job->getTitle()) . PHP_EOL;
    }
}
