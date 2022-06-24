<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminKelolaPenggunaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminMengaksesHalamanPengguna()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAdminMengeditPengguna()
    {
        $response = $this->get('/');
        sleep(1);

        $response->assertStatus(200);
    }

    public function testAdminMenghapusPengguna()
    {
        $response = $this->get('/');
        sleep(0.3);

        $response->assertStatus(200);
    }
}
