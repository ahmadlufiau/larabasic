<?php

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
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('siswa', 'SiswaController');

// Route::get('/about', function () {
// 	$nama = 'Lufi';
// 	$asal = 'Tuban';
// 	$notelp = '085732121703';
// 	return view('about', ['nama' => $nama, 'asal' => $asal, 'notelp' => $notelp]);
// });

// use App\Siswa;
// Route::get('siswa', function () {
// 	$siswas = Siswa::all();
// 	return view('siswa.datasiswa', ['siswas' => $siswas]);
// });

// Route::get('/backend/siswa', function () {
// 	$siswas = Siswa::all();
// 	return view('siswa.index', ['siswas' => $siswas]);
// });

// //Menyimpan data siswa
// Route::get('siswa/simpan', function () {
// 	$siswa = new Siswa;
// 	$siswa->name = "Abdul";
// 	$siswa->address = "Demak";
// 	$siswa->email = "abdul@gmail.com";
// 	$siswa->save();
// 	return 'berhasil menyimpan';
// });

// // Melihat data siswa
// Route::get('siswa/{id}', function ($id) {
// 	$siswa = Siswa::find($id);
// 	return view('siswa.lihat', ['siswa' => $siswa]);
// });