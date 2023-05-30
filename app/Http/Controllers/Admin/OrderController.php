<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Detail_pesanan;
use App\Models\Layanan;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function tableOrder()
    {
        $ordertable =  Detail_pesanan::all();
        $data  = Layanan::all();


        return view('admin.order.tableOrder', compact('ordertable'), compact('data'));
    }

    public function post(Request $request)
    {
        $data = $request->all();

        try {
            $user = User::where(['name' => $data['nama_pemilik']])->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return redirect()->back()->withInput()->withErrors(['name' => 'Nama pengguna tidak ditemukan dalam database.']);
        } 

        $datas = new Detail_pesanan();
        $datas->nomer_plat = $data['no_kendaraan'];
        $datas->jenis_kendaraan = $data['jenis_kendaraan'];
        $datas->user_id = $user->id;
        $datas->layanan_id = $data['layanan'];
        $datas->status = $data['status'];

        $datas->save();

        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        $datas = $request->all();
        
        try {
            $user = User::where(['name' => $datas['nama_pemilik']])->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return redirect()->back()->withInput()->withErrors(['name' => 'Nama pengguna tidak ditemukan dalam database.']);
        }

        Detail_pesanan::where(['id' => $id])->update(['nomer_plat' => $datas['no_kendaraan'], 'jenis_kendaraan' => $datas['jenis_kendaraan'],'user_id' => $user->id ,'layanan_id' => $datas['layanan'], 'status' => $datas['status']]);
        
        return redirect()->back();
    }


    public function delete($id)
    {
        $datas = Detail_pesanan::find($id);
        $datas->delete();
        return redirect()->back();
    }
}
