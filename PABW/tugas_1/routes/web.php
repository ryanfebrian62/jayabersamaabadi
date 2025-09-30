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

Route::get('/fakultas', function () {
    $fakultas = [
        ['Kode' => 'FRI', 'nama_fakultas' => 'Fakultas Rekayasa Industri'],
        ['Kode' => 'FTE', 'nama_fakultas' => 'Fakultas Teknik Elektro'],
        ['Kode' => 'FIF', 'nama_fakultas' => 'Fakultas Informatika'],
        ['Kode' => 'FEB', 'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis'],
        ['Kode' => 'FIK', 'nama_fakultas' => 'Fakultas RIndustri Kreatif'],
        ['Kode' => 'FIT', 'nama_fakultas' => 'Fakultas Ilmu Terapan'],
    ];
    return view('fakultas', ['fakultas' => $fakultas]);
});//
