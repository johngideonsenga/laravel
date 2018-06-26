<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);

        //$this->get('/')->assertSee('The Bootstrap Blog');

        $first = factor(Post::class)->create();
        $second = factor(Post::class)->create([
          'created_at'=>\Carbon\Carbon::new()->subMonth()
        ]);

        $posts = Post::archive();
    
        $this->assertCount(2,$posts);
      }
}
