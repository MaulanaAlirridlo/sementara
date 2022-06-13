<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'tbl_pesanan';

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
