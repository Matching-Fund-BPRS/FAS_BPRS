<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('usermanagement',[
            'user_data' => User::paginate(10)
        ]);
    }

    public function addUser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level,
        ]);

        return redirect()->route('/dashboard/user')->with('message', 'Berhasil menambahkan!');
    }
}
