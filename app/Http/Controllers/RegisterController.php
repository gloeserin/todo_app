<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function register(Request $request){
        $validateData = $request->validate([
            'email' => 'required',
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $validateData['password']= bcrypt($validateData['password']);

        User::create($validateData);
        //with fungsinya untuk membawa pemberitahuan ke halaman yang diredirect
        return redirect('/')->with('SuccessRegister', 'Berhasil menambahkan akun, silahkan login!');

    }
}
