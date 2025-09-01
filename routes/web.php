<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
return "Ini adalah halaman profil";
});

Route::get('/home', function () {
return view('home');
});

Route::get('/mahasiswa',
[App\Http\Controllers\MahasiswaController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'nama' => 'Moh. Jevon Attaillah',
        'nim' => '362458302035',
        'kelas' => 'TRPL 2D'
    ]);
});

Route::get('/biodata', function () {
    return view('biodata', [
        'nama' => 'Moh. Jevon Attaillah',
        'alamat' => 'Banyuwangi',
        'ttl' => 'Banyuwangi, 17 April 2005',
    ]);
});

Route::get('/kontak', function () {
return view('kontak', [
    'nomor' => '081238678123',
]);
});