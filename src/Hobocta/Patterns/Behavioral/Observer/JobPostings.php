<?php

namespace Hobocta\Patterns\Behavioral\Observer;

/**
 * Class JobPostings
 * @package Hobocta\Patterns\Behavioral\Observer
 */
class JobPostings
{
    /**
     * @var Observer[]
     */
    protected $observers = [];

    /**
     * @param JobPost $jobPosting
     */
    protected function notify(JobPost $jobPosting)
    {
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }

    /**
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param JobPost $jobPosting
     */
    public function addJob(JobPost $jobPosting)
    {
        $this->notify($jobPosting);
    }
}
