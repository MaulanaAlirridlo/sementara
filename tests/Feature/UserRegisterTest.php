<?php

namespace Tests\Feature;

use Tests\TestCase;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserRegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserMengaksesHalamanDaftar()
    {
        $this->withoutExceptionHandling();

        $this->get('/daftar')->assertStatus(200);
    }

    public function testUserMendaftar()
    {
        $this->withoutExceptionHandling();

        $faker = Faker::create('id_ID');

        $user = [
            "nama_lengkap" => $faker->name,
            "email" => $faker->unique()->safeEmail,
            "jenis_kelamin" => $faker->randomElement(['Pria', 'Wanita']),
            "password" => 'secret',
            "password_confirmation" => 'secret',
            "simpan" => true
        ];

        // dd($user);

        $this->from('/daftar')->post('/daftar', $user)
        ->assertRedirect('/daftar');
    }
}
