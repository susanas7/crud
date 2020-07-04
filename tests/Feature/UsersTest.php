<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCanLogin()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUserCanShow()
    {   
        //no funciona xq no estamos pasando el parametro de user
        $response = $this->get(route('users.edit'));

        $response->assertStatus(200);
    }

    //prueba...

}
