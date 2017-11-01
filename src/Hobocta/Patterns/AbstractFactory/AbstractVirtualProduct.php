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
     * @param string $name
     * @param int $fileSize
     */
    public function __construct(string $name, int $fileSize)
    {
        parent::__construct($name);

        $this->fileSize = $fileSize;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }
}
