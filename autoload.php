<?php

function __autoload($classe)
{
	$paths = ['models', 'controllers', 'helpers'];
	foreach ($paths as $path) {
		$file = __DIR__."/$path/$classe.php";
		if (file_exists($file)) {
			include_once $file;
		}
	}
}