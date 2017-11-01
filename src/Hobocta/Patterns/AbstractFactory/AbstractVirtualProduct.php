<?php

namespace Hobocta\Patterns\AbstractFactory;

/**
 * Class AbstractVirtualProduct
 * @package Hobocta\Patterns\AbstractFactory
 */
abstract class AbstractVirtualProduct extends AbstractProduct
{
    /**
     * @var int
     */
    protected $fileSize = 0;

    /**
     * AbstractVirtualProduct constructor.
     * @param $name
     * @param $fileSize
     */
    public function __construct($name, $fileSize)
    {
        parent::__construct($name);

        $this->fileSize = $fileSize;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }
}
