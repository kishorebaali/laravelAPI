<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\book;
use App\Models\product;
use App\Models\mobile;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\UserLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $book = new book();
    $book->bookname = "born";
    $book->bookauthor = "sathish";
    $book->bookprice = "200";
    $book->save();

    return view('welcome', ['data' => product::all()]);
});

Route::get('/testpage', [ProductController::class, 'index']);
Route::get('/sample', [ProductController::class, 'sample']);
Route::post('/processing', [ProductController::class, 'processingfunc'])->name('registerprocess');
Route::get('/products', [ProductController::class, 'products']);
Route::get('/mobile', [ProductController::class, 'mobile']);
Route::post('/adding', [ProductController::class, 'addingfunc'])->name('mobileadding');
Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [ProductController::class, 'showdata']);
Route::post('/edit', [ProductController::class, 'update'])->name('update');
Route::post('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
Route::get('/mobiles', function () {
    return view('mobiles', ['data' => mobile::all()]);
});
Route::get('/user', [UserController::class, 'user']);
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/userlist',  [UserController::class, 'userlist']);
Route::delete('/delete/{id}',  [UserController::class, 'delete']);

Route::get('/userupdate/{id}',  [UserController::class, 'update']);
Route::put('/userupdate',  [UserController::class, 'userupdate'])->name('userupdate');
Route::post('/userlogin',  [UserLogin::class, 'authenticate']);
Route::get('/login',  [UserLogin::class, 'userlogin']);
Route::get('/dashboard',  [UserLogin::class, 'dashboard']);
