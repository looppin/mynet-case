<?php

namespace Tests\Feature;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    /** @test */
    public function adminPageTest()
    {

        $this->withoutExceptionHandling();
        $this->withoutMiddleware();

        $response = $this->get('/admin');

        $response->assertOk();

    }


}
