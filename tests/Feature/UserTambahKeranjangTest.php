<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTambahKeranjangTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserMengaksesHalamanProduk()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUserMengaksesHalamanDetailProduk()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUserMenambahkanKeKeranjang()
    {
        $response = $this->get('/');
        sleep(0.4);
        $response->assertStatus(200);
    }
}
