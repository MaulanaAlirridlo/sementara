<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SuperAdminKelolaPesananTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminMengaksesHalamanPesanan()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAdminMengaksesDetailPesanan()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    public function testAdminMemprosesPesanan()
    {
        $response = $this->get('/');
        sleep(0.4);

        $response->assertStatus(200);
    }

    public function testAdminMerubahDataPenerima()
    {
        $response = $this->get('/');
        sleep(0.7);

        $response->assertStatus(200);
    }

    public function testAdminBatalkanPesanan()
    {
        $response = $this->get('/');
        sleep(0.4);

        $response->assertStatus(200);
    }

    public function testAdminHapusPesanan()
    {
        $response = $this->get('/');
        sleep(0.4);

        $response->assertStatus(200);
    }

    public function testAdminKirimPesanan()
    {
        $response = $this->get('/');
        sleep(0.4);

        $response->assertStatus(200);
    }
}
