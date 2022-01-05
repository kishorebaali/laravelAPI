<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserLogin extends Controller
{


    public function userlogin()
    {
        return view('userlogin');
    }

    public function authenticate(Request $request)
    {
        $data = DB::table('users')->where(['email' => $request->email, 'password' => $request->password])->first();

        if ($data == null) {
            return 'invalid';
        } else {
            session(["user" => $data]);
            return redirect('dashboard');
        }
    }
    public function dashboard()
    {
        return View('dashboard');
    }
}
