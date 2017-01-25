<?php

namespace App\Support;

use Exception;

class View
{
	public static function render($view, $arr)
	{
		foreach ($arr as $varName => $value) {
			$$varName =$value;
		}
		$file = self::getFile($view);
		if($file) {
			include $file;
		} else {
			throw new Exception("View '".$view."' not found");
		}
	}

	private static function getFile($view) {
		$file = __DIR__.'/../views/'.str_replace('.', '/', $view).'.php';
		if(file_exists($file)) {
			return $file;
		}
	}
}