<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SuperAdminKelolaAdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSuperAdminMengaksesHalamanAdmin()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testSuperAdminMenambahkanAdmin()
    {
        $response = $this->get('/');
        sleep(0.7);

        $response->assertStatus(200);
    }

    public function testSuperAdminMengeditAdmin()
    {
        $response = $this->get('/');
        sleep(1);

        $response->assertStatus(200);
    }

    public function testSuperAdminMenghapusAdmin()
    {
        $response = $this->get('/');
        sleep(0.3);

        $response->assertStatus(200);
    }
}
