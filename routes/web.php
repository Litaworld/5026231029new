<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiControllerDua;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BukuTulisController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\BlogController;

//import java.io;


//system.out.println();
Route::get('/', function () { // Route::get('published url', 'controller[simple html, view, function di ...]')
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class, 'helloworld']);

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('bootsrapt1', function () {
	return view('bootsrapt1');
});

Route::get('eminalinktree', function () {
	return view('eminalinktree');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('layoutexercise029', function () {
	return view('layoutexercise029');
});

Route::get('template1', function () {
	return view('template1');
});

Route::get('test', function () {
	return view('test');
});

Route::get('danantara', function () {
	return view('danantara');
});

Route::get('ets', function () {
	return view('ets');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('dosen', [Link::class, 'index']);
//Route::get('/pegawai/{nama}', [PegawaiControllerDua::class, 'index']);

Route::get('/formulir/', [PegawaiControllerDua::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiControllerDua::class, 'proses']);

//route blog
Route::get('/blog', [blogcontroller::class, 'home']);
Route::get('/blog/tentang', [blogcontroller::class, 'tentang']);
Route::get('/blog/kontak', [blogcontroller::class, 'kontak']);

//route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

//route latihan CRUD
Route::get('/bukutulis', [BukuTulisController::class, 'index']);
Route::get('/bukutulis/tambah', [BukuTulisController::class, 'tambah']);
Route::post('/bukutulis/store', [BukuTulisController::class, 'store']);
Route::get('/bukutulis/edit/{id}', [BukuTulisController::class, 'edit']);
Route::post('/bukutulis/update', [BukuTulisController::class, 'update']);
Route::get('/bukutulis/hapus/{id}', [BukuTulisController::class, 'hapus']);
Route::get('/bukutulis/cari', [BukuTulisController::class, 'cari']);

// Route keranjang
Route::get('/keranjang', [KeranjangController::class, 'index4']);
Route::get('/keranjang/tambah', [KeranjangController::class, 'tambah3']);
Route::post('/keranjang/store', [KeranjangController::class, 'store']);
Route::get('/keranjang/hapus/{id}', [KeranjangController::class, 'destroy']);

// Route karyawan
Route::get('/karyawan', [KaryawanController::class, 'indexkaryawan']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('/karyawan/update', [KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

// AA-chat
Route::get('/chat', [ChatController::class, 'index']);

//CC-kategori
Route::get('/combo', [KategoriController::class, 'index']);
Route::post('/combo', [KategoriController::class, 'submit']);

// BB-mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/view/{nrp}', [MahasiswaController::class, 'view']);
Route::get('/mahasiswa/edit/{nrp}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{nrp}', [MahasiswaController::class, 'update']);

// FF-COUNTER
use App\Http\Controllers\CounterController;
Route::get('/counter', [CounterController::class, 'index']);

//DD- pekerja
Route::get('/pekerja', [PekerjaController::class, 'index']);
Route::get('/pekerja/input', [PekerjaController::class, 'input']);
Route::post('/pekerja/store', [PekerjaController::class, 'store']);
Route::get('/pekerja/hapus/{kodepegawai}', [PekerjaController::class, 'hapus']);
