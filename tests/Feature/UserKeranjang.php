<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserKeranjang extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function UserKeranjang()
    {
        $user = factory(DB::table('tbl_pengguna'))->create([
            'email'    => 'username@example.net',
            'password' => bcrypt('secret'),
        ]);
        //Login User saat ini
        $this->actingAs($user)
        ->get('/produk/detail/BRG2206102')
       // ->visit('/produk')
        ->assertStatus(200)
        ->assertRedirect('/admin/my-restaurants/create');
    }
}
