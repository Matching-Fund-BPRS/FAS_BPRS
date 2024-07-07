<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return view('usermanagement',[
            'user_data' => User::paginate(7),
            'nasabah' => null
        ]);
    }

    
    public function addUser(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'password' => 'required',
            'confirm-password' => 'required|same:password', // Harus sama dengan password
        ]);
    
        if ($validator->fails() || false == true) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->with('result_message', 'Username sudah ada!');
        }
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,
            'isActive' => true,
        ]);

        return redirect()->back()->with('message', 'Berhasil menambahkan!');
    }

    public function deleteUser(Request $request){
        $user = User::find($request->username);

        $user->update(['isActive' => !$user->isActive]);
        
        return redirect()->back();
    }
}
