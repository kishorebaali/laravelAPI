<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;
use App\Models\mobile;

class ProductController extends Controller
{
    public function index()
    {
        return view('test');
    }
    public function sample()
    {
        return view('sample');
    }
    public function mobile()
    {
        return view('mobile');
    }
    public function products()
    {
        $productobj = new product();

        $result = $productobj->all();
        foreach ($result as $o) {
            echo $o['id'];
            echo $o['Pname'] . '<br>';
        }
    }
    public function processingfunc(Request $request)
    {
        $u = new user();
        $u->name = $request->name;
        $u->email = $request->email;
        $u->mobile = $request->mobile;
        $u->password = $request->password;
        $u->save();
        return redirect('/sample');
    }
    public function addingfunc(Request $request)
    {
        $m = new mobile();
        $m->brand = $request->brandname;
        $m->model = $request->model;
        $m->price = $request->price;
        $m->save();
        return redirect('/mobile');
    }

    // public function deletefunc(Request $request, $id)
    // {
    //     mobile::where('id', $id)->delete();

    //     return redirect('/mobiles');
    // } 
    public function delete($id)
    {
        mobile::find($id)->delete();

        return redirect('/mobiles');
    }

    public function showdata($id)
    {
        $data = mobile::find($id);
        return view('update', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = mobile::find($request->id);
        $data->brand = $request->brandname;
        $data->model = $request->model;
        $data->price = $request->price;
        $data->save();
        return redirect('/mobiles');
    }
}
