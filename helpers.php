<?php

if(!function_exists('config')) {
	function config(string $get) {
		$get = explode(".", $get);
		$config = include __DIR__."/config/{$get[0]}.php";
		if (count($get) > 1) {
			for ($i=1; $i < count($get); $i++) {
				$config = $config[$get[$i]];
			}
		}
		return $config;
	}
}
