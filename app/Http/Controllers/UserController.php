<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('usermanagement',[
            'user_data' => User::paginate(5)
        ]);
    }

    
    public function addUser(Request $request){
        $this->validate($request, [
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level,
            'isActive' => true,
        ]);

        return redirect()->back()->with('message', 'Berhasil menambahkan!');
    }

    public function deleteUser(Request $request){
        User::where('id' , $request->id)->delete();
        
        return redirect()->back();
    }
}
