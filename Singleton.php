<?php
namespace Hbc\Patterns;

class Singleton
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
