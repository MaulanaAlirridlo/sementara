<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'tbl_invoice';

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}
