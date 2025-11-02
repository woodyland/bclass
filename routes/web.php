<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/home', [BlogController::class, 'home']);
Route::get('/post/{id}', [BlogController::class, 'show']);
Route::get('/about', [BlogController::class, 'about']);
// Route::get('/', function () {
//     return view('welcome');
// });


// // ini adalah rute menuju halamandua
// Route::get('/kedua', function () {
//     return view('halamandua');
// });
// // halaman dua berakhir disini

// Route::get('/fitur', function () {
//     return view('fitur', ['nama' => 'selamat datang wisel']);
// });

// Route::get('/product/{id}', function ($id) {
//     $product = [
//         'id' => $id,
//         'barang' => 'ticket',
//         'harga' => 100000
//     ];
//     return view('product', ['product' => $product]);
// });
