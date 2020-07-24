<?php

namespace Tests;

use Illuminate\Database\Capsule\Manager as Capsule;

class DatabaseTest extends TestCase
{
    /** @test */
    function get_name_to_table_users_with_query_builder()
    {
        $capsule = new Capsule;
        $capsule->addConnection(config('app.database'));
        $user = $capsule->getConnection()->table('users')->where('id', 1)->get();
        $this->assertEquals('erick', $user->first()->name);
    }
}
