<?php
spl_autoload_register(
	function ($class) {
		$prefix = 'Hbc\\Patterns\\';

		$baseDir = sprintf('%s/', __DIR__);

		$len = strlen($prefix);

		if (strncmp($prefix, $class, $len) !== 0) {
			return;
		}

		$relativeClass = substr($class, $len);

		$file = sprintf('%s%s.php', $baseDir, str_replace('\\', '/', $relativeClass));

		if (file_exists($file)) {
			require $file;
		}
	}
);
