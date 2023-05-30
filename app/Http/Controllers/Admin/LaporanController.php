<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Detail_pesanan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporan()
    {
        $laporantable = Detail_pesanan::all();
        return view('admin.laporan.laporan', compact('laporantable'));
    }
}
