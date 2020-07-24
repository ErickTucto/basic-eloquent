<?php

namespace Tests\Helpers;

use Tests\TestCase;

class ConfigTest extends TestCase
{
	/** @test */
	function get_config_by_dots()
	{
		$this->assertIsArray(config("app.database"));
		$this->assertTrue(array_key_exists("host", config("app.database")));
		$this->assertEquals("localhost", config("app.database.host"));
	}

	/** @test */
	function get_first_is_name_file()
	{
		$this->assertIsArray(config("app"));
	}
}
