<?php
namespace Hobocta\Patterns\AbstractFactory;

abstract class AbstractProduct implements ProductInterface
{
    protected $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
