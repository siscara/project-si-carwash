<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Detail_pesanan;
use App\Models\Layanan;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function layanan()
    {
        // $ordertable =  Detail_pesanan::all();
        $layanan = Layanan::all();
        
        return view('client.layanan.layananpage', compact('layanan'));
    }

    public function show(Request $request, $id)
    {
       $datas =  Layanan::where(['id' => $id]);
        dd($datas);
        return redirect()->back();
    }

    public function post(Request $request)
    {
        $data = $request->all();

        // $user =  Detail_pesanan::where('user_id', auth()->user()->id)->get();

        $datas = new Detail_pesanan();
        $datas->nomer_plat = $data['no_kendaraan'];
        $datas->jenis_kendaraan = $data['jenis_kendaraan'];
        $datas->user_id = auth()->user()->id;
        $datas->layanan_id = $data['layanan'];
        $datas->status = $data['status'];

        $datas->save();

        return redirect()->back();
    }

    
}
