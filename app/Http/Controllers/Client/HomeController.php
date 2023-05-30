<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Detail_pesanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        

        $ordertable =  Detail_pesanan::where('user_id', auth()->user()->id)->get();
        // dd($ordertable);

        return view('client.home.home', compact('ordertable'));
    }

    public function delete($id){
        $datas = Detail_pesanan::find($id);
        $datas->delete();
        return redirect()->back();
    }
}
