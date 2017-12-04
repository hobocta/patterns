<?php

namespace Hobocta\Patterns\Behavioral\Iterator;

/**
 * Class StationList
 * @package Hobocta\Patterns\Behavioral\Iterator
 */
class StationList implements \Iterator, \Countable
{
    /**
     * @var RadioStation[]
     */
    protected $stations = [];

    /**
     * @param RadioStation $station
     */
    public function addStation(RadioStation $station)
    {
        $this->stations[] = $station;
    }

    /**
     * @param RadioStation $toRemove
     */
    public function removeStation(RadioStation $toRemove)
    {
        $toRemoveFrequency = $toRemove->getFrequency();

        $this->stations = array_filter(
            $this->stations,
            function (RadioStation $station) use ($toRemoveFrequency) {
                return $station->getFrequency() !== $toRemoveFrequency;
            }
        );
    }

    /**
     * @return RadioStation
     */
    public function current(): RadioStation
    {
        return current($this->stations);
    }

    public function next()
    {
        next($this->stations);
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return key($this->stations);
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        $key = key($this->stations);

        return $key !== null && $key !== false;
    }

    public function rewind()
    {
        reset($this->stations);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->stations);
    }
}
