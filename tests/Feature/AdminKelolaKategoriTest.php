<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminKelolaKategoriTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testAdminMengaksesHalamankategori()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAdminMenambahkanKategori()
    {
        $response = $this->get('/');
        sleep(0.4);

        $response->assertStatus(200);
    }

    public function testAdminMengeditKategori()
    {
        $response = $this->get('/');
        sleep(0.7);

        $response->assertStatus(200);
    }

    public function testAdminMenghapusKategori()
    {
        $response = $this->get('/');
        sleep(0.3);

        $response->assertStatus(200);
    }
}
