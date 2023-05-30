<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'nama_layanan',
        'harga'
    ];

    public function detailPesanan()
    {
        return $this->hasMany(DetailPesanana::class, 'layanan_id');
    }
}
