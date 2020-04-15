<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

        /**
     * Project path test.
     *
     * @return void
     */
    public function testProjectHasPath()
    {
        $this->factory('App\Poject')->create();
        $this->assertEquals('/projects/' . $project->id, $project->path());
    }
}
