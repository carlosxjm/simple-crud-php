<?php

	function getFilePath($namespace) {
		$namespaceArr = explode('\\',$namespace);
		$className = end($namespaceArr);
		array_pop($namespaceArr);
		return __DIR__.'/'.strtolower(implode('/', $namespaceArr)).'/'.$className.'.php';
	}

	function autoloadMyApp($namespace) {
		include_once getFilePath($namespace);
	}

	spl_autoload_register('autoloadMyApp');
