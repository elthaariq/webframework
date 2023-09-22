<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function (){
    echo '<h1>Hello World</h1>';
    
}); 

Route::get('/mahasiswa/{nama}', function ($nama){
    return "Tampilkan mahasiswa bernama $nama";
    
}); 

Route::get('/stok_barang/{jenis?}/{merek?}', function($a = 'smartphone',$b = 'samsung')
{
    return "Cek sisa stok untuk stok $a $b";
});

Route::get('/user/{id}',function ($id){
    return "Tampilkan user dengan id = $id";
})->where('id','[0-9]+');

Route::get('/hubungi-kami', function (){
    return '<h1>Hubungi Kami:</h1>';
});
Route::redirect('/contact-us','/hubungi-kami');