<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCanCreateProjectTest()
    {
        $attributes = [
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence,
        ];
        $this->post('/projects', $attributes);
        $this->assertDatabaseHas('projects', $attributes);

        // $response = $this->get('/');
        // $response->assertStatus(200);
    }
}
