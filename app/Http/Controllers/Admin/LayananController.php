<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function tableLayanan()
    {

        $layanantable = Layanan::all();
        return view('admin.layanan.tablelayanan', compact('layanantable'));
    }

    public function post(Request $request){
        $datas = $request->all();

        // dd($datas);

        $layanan = new Layanan();

        $ext = $request->file('photo')->getClientOriginalExtension();
        $newName = $datas['layanan'].'.'.$ext;

        $layanan->nama_layanan = $datas['layanan'];
        $layanan->harga = $datas['harga'];
        $layanan->foto = $request->file('photo')->storeAs('photo', $newName);
        $layanan->save();
        return redirect()->back();
    }

    public function edit(Request $request, $id){
        $datas = $request->all();

        Layanan::where(['id' =>$id])->update(['nama_layanan' => $datas['layanan'], 'harga' => $datas['harga']]);
        return redirect()->back();

    }

    public function delete($id){
        $datas = Layanan::find($id);
        $datas->delete();
        return redirect()->back();
    }
}
