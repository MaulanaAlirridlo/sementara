<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'tbl_kategori';

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
