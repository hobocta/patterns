<?php
namespace Hbc\Patterns\AbstractFactory;

abstract class AbstractFactory
{
	abstract function createBook();
	abstract function createMagazine();
}
