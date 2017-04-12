<?php
namespace Hobocta\Patterns\AbstractFactory;

abstract class AbstractRealProduct extends AbstractProduct
{
	protected $weight = 0;

	public function __construct($name, $weight)
	{
		parent::__construct($name);

		$this->weight = $weight;
	}

	public function getWeight()
	{
		return $this->weight;
	}
}
