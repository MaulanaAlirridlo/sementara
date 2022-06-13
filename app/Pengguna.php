<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'tbl_pengguna';

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
