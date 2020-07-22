<?php

if(!function_exists('config')) {
	function config(string $get) {
		$config = require_once __DIR__."/config/app.php";
		var_dump($config);
	}
}
