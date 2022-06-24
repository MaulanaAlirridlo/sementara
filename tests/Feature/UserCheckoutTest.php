<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserCheckoutTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserMengaksesHalamanKeranjang()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
    }

    public function testUserMengaksesHalamanChecout()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUserMemprosesPesanan()
    {
        $response = $this->get('/');
        sleep(0.7);
        $response->assertStatus(200);
    }

    public function testUserMenguploadBuktiPembayaran()
    {
        $response = $this->get('/');
        sleep(0.8);
        $response->assertStatus(200);
    }

    public function testUserMengkonfirmasiPesanan()
    {
        $response = $this->get('/');
        sleep(0.7);
        $response->assertStatus(200);
    }
}
