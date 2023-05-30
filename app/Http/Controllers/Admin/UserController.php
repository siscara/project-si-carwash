<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function tableUser()
    {
        $usertable = User::paginate(3);

        return view('admin.user.tableUser', compact('usertable'));
    }



    public function edit(Request $request,  $id){
        $datas = $request->all();

        User::where(['id' =>$id])->update(['name' => $datas['nama'], 'email' => $datas['email'], 'no_hp' => $datas['phone']]);
        return redirect()->back();
    }

    public function delete($id){
        $datas = User::find($id);
        $datas->delete();
        return redirect()->back();
    }
}
