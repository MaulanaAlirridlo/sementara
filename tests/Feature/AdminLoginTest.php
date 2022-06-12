<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminLoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAdminMengaksesHalamanMasuk()
    {
        $this->withoutExceptionHandling();

        $this->get('/masuk')->assertStatus(200);
    }

    public function testAdminMasuk()
    {
        $this->withoutExceptionHandling();

        $admin = [
            "email" => 'admin@email.com',
            "password" => 'admin123',
            "simpan" => true
        ];

        $this->post('admin/login', $admin)
        ->assertRedirect('/admin');
    }
}
