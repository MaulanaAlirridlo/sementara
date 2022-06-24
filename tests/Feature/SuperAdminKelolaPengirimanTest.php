<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SuperAdminKelolaPengirimanTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminMengaksesHalamanPengiriman()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAdminMengkonfirmasiPesanan()
    {
        $response = $this->get('/');
        sleep(0.2);

        $response->assertStatus(200);
    }
}
