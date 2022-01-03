<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user()
    {
        return view('user');
    }

    public function register(Request $request)
    {
        $data = new user();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->password = $request->password;
        $data->save();
        return redirect('/userlist');
    }

    public function userlist()
    {
        $data = user::all();
        return view('userlist', ['data' => $data]);
    }

    public function delete($id)
    {
        user::find($id)->delete();
        return redirect('/userlist');
    }

    public function update($id)
    {
        $data = user::find($id);
        return view('/userupdate', ['data' => $data]);
    }

    public function userupdate(Request $request)
    {
        // return $request->all();
        // die;
        $data = user::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->password = $request->password;
        $data->save();
        return redirect('/userlist');
        // return 'success';
    }
}
