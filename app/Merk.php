<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    protected $table = 'tbl_merk';

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
