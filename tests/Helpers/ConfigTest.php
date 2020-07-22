<?php

namespace Tests\Helpers;

use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
	/** @test */
	function get_config_by_dots()
	{
		$this->markTestIncomplete("Hacer uno mas sencillo antes");
	}

	/** @test */
	function get_first_is_name_file()
	{
		$this->assertIsArray(config("app"));
	}
}
