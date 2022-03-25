<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddlewere;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class HelloTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHello()
    {
        $this->assertTrue(true);

        $responce = $this->get('/');
        $responce->assertStatus(200);

        $responce = $this->get('/hello');
        $responce->assertStatus(302);

        $user = factory(User::class)->create();
        $responce = $this->actingAs($user)->get('/hello');
        $responce->assertStatus(200);

        $responce = $this->get('/no_route');
        $responce->assertStatus(404);

       
    }
}
