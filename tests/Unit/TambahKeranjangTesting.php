<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TambahKeranjangTesting extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testTambahKeranjang()
    {
        $this->withoutExceptionHandling();

        $barang = [
            'id_barang'         => 'BRG2206091',
            "simpan" => true
        ];

        $this->post('produk/tambah-keranjang/BRG2206091', $barang)
        ->assertTrue('success', 'Kursi Bagus dan Keren berhasil di tambahkan ke keranjang');
    }
}
