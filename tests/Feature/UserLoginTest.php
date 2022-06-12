<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserLoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserMengaksesHalamanMasuk()
    {
        $this->withoutExceptionHandling();

        $this->get('/masuk')->assertStatus(200);
    }

    public function testUserMasuk()
    {
        $this->withoutExceptionHandling();

        $user = [
            "email" => 'pengguna@email.com',
            "password" => 'pengguna123',
            "simpan" => true
        ];

        $this->post('/masuk', $user)
        ->assertRedirect('/');
    }
}
