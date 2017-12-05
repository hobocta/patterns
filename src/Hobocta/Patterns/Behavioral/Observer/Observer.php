<?php

namespace Hobocta\Patterns\Behavioral\Observer;

/**
 * Interface Observer
 * @package Hobocta\Patterns\Behavioral\Observer
 */
interface Observer
{
    /**
     * @param JobPost $jobPosting
     */
    public function onJobPosted(JobPost $jobPosting);
}
