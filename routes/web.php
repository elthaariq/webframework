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

Route::get('/mahasiswa', function (){
    $arrMahasiswa = ["Kai Havertz", "Mason Mount", "Timo Werner", "Olivier Giroud"];
    return view ("mahasiswa")->with("mahasiswa", $arrMahasiswa);
});

Route::get('/dosen', function (){
    $arrDosen = ["Andi Purnomo", "Ahmad Ihsan", "Ahlijati Nuraminah"];
    return view ("dosen")->with("dosen", $arrDosen);
});

