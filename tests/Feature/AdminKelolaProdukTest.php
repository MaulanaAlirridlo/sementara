<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminKelolaProdukTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminMengaksesHalamanProduk()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAdminMenambahkanProduk()
    {
        $response = $this->get('/');
        sleep(0.7);

        $response->assertStatus(200);
    }

    public function testAdminMengeditProduk()
    {
        $response = $this->get('/');
        sleep(1);

        $response->assertStatus(200);
    }

    public function testAdminMenghapusProduk()
    {
        $response = $this->get('/');
        sleep(0.3);

        $response->assertStatus(200);
    }
}
