<?php
namespace Hbc\Patterns\Singleton;

class Singleton implements SingletonInterface
{
	private static $instance;

	public static function getInstance()
	{
		if (self::$instance === null) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	private function __construct()
	{
	}

	private function __clone()
	{
	}
}
