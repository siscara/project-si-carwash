<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_kendaraan',
        'layanan_id',
        'user_id',
        'nomer_plat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}
