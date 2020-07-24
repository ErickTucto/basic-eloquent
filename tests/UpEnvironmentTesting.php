<?php

namespace Tests;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

trait UpEnvironmentTesting
{
    protected function createUsersTable(Capsule $capsule): void
    {
        $schema = $capsule->getConnection()->getSchemaBuilder();
        $schema->create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->unique();
        });
    }

    protected function createData(Capsule $capsule): void
    {
        $capsule->getConnection()
            ->table('users')
            ->insert([
                "name" => "erick",
                "email" => "erick@testing.test",
                "password" => password_hash("123456", PASSWORD_BCRYPT),
            ]);
    }
}
