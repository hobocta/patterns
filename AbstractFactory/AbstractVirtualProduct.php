<?php
namespace Hbc\Patterns\AbstractFactory;

abstract class AbstractVirtualProduct extends AbstractProduct
{
	protected $fileSize = 0;

	public function __construct($name, $fileSize)
	{
		parent::__construct($name);

		$this->fileSize = $fileSize;
	}

	public function getFileSize()
	{
		return $this->fileSize;
	}
}
