<?php

namespace Aammui\DDD\Tests;

use Aammui\LaravelTaggable\LaravelTaggableServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{

    public function setUp(): void
    {
        parent::setUp();

        // setup databases
        $this->setUpDatabase($this->app);
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            LaravelTaggableServiceProvider::class
        ];
    }

    /**
     * Set up the database.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function setUpDatabase($app)
    {
        $app['db']->connection()->getSchemaBuilder()->create('Posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->softDeletes();
        });

        require_once __DIR__ . "/../database/migrations/2018_06_24_050543_create_categories_table.php";
        require_once __DIR__ . "/../database/migrations/2018_12_01_081054_create_tags_table.php";
        (new  \CreateCategoriesTable())->up();
        (new  \CreateTagsTable())->up();
    }
}
