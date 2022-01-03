<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\mobile;
use GrahamCampbell\ResultType\Success;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/mobiles/{id?}', function ($id = null) {
    return $id ? mobile::find($id) : mobile::all();
    // if ($id) {
    //     return  ['data' => mobile::find($id)];
    // } else {
    //     return  ['data' => mobile::all()];
    // }
});
Route::post('/mobiles', function (Request $request) {
    $m = new mobile();
    $m->brand = $request->brandname;
    $m->model = $request->model;
    $m->price = $request->price;
    $m->save();
});
Route::delete('/mobiles/{id}', function ($id) {
    return mobile::find($id)->delete();
});
Route::put('/mobiles/{id}', function ($id, Request $request) {
    $mobile = mobile::find($id);
    $mobile->brand = $request->brandname;
    $mobile->model = $request->model;
    $mobile->price = $request->price;
    $mobile->save();
    return ['status' => 'Success'];
});
