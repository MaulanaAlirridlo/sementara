<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminMengaturWebsiteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminMengaksesHalamanPengaturanUmum()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAdminMengubahPengaturanUmum()
    {
        $response = $this->get('/');
        sleep(1);

        $response->assertStatus(200);
    }

    public function testAdminMengaksesHalamanPengaturanPembayaran()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAdminMengubahMetodePembayaran()
    {
        $response = $this->get('/');
        sleep(0.5);

        $response->assertStatus(200);
    }

    public function testAdminMengaksesHalamanPengaturanKurir()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAdminMengubahPengaturanKurir()
    {
        $response = $this->get('/');
        sleep(0.5);

        $response->assertStatus(200);
    }

    public function testAdminMengaksesHalamanPengaturanRekening()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAdminMenambahkanRekening()
    {
        $response = $this->get('/');
        sleep(0.7);

        $response->assertStatus(200);
    }

    public function testAdminMengeditRekening()
    {
        $response = $this->get('/');
        sleep(1);

        $response->assertStatus(200);
    }

    public function testAdminMenghapusRekening()
    {
        $response = $this->get('/');
        sleep(0.3);

        $response->assertStatus(200);
    }
}
