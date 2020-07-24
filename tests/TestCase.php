<?php

namespace Tests;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Illuminate\Database\Capsule\Manager as Capsule;

class TestCase extends PHPUnitTestCase
{
    use UpEnvironmentTesting;

    /**
     * Check if got up environment
     *
     * @var        boolean
     */
    private static $gotUp = false;

    public function setUp(): void
    {
        if (!self::$gotUp) {
            $this->creatEnviroment();
            self::$gotUp = true;
        }
    }

    protected function creatEnviroment(): void
    {
        $capsule = new Capsule;
        $capsule->addConnection(config('app.database'));

        $schema = $capsule->getConnection()->getSchemaBuilder();
        $schema->dropIfExists('users');

        $this->createUsersTable($capsule);
        $this->createData($capsule);
    }
}
