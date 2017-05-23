<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', function ()
{
    return view('home');
});

Route::get('/', function()
{
	return view('login');
});

Route::get('/login2','SesiController@form');
Route::post('/login2','SesiController@validasi');
Route::get('/logout1','SesiController@logout');

Route::get('kapten','kaptenController@awal');
Route::get('kapten/{kapten}','kaptenController@lihat');
Route::post('kapten/simpan','kaptenController@simpan');
Route::get('kapten/edit/{kapten}','kaptenController@edit');
Route::post('kapten/edit/{kapten}','kaptenController@update');
Route::get('kapten/hapus/{kapten}','kaptenController@hapus');

Route::get('awak','awakController@awal');
Route::get('awak/{awak}','awakController@lihat');
Route::post('awak/simpan','awakController@simpan');
Route::get('awak/edit/{awak}','awakController@edit');
Route::post('awak/edit/{awak}','awakController@update');
Route::get('awak/hapus/{awak}','awakController@hapus');

Route::get('kapal','kapalController@awal');
Route::get('kapal/{kapal}','kapalController@lihat');
Route::post('kapal/simpan','kapalController@simpan');
Route::get('kapal/edit/{kapal}','kapalController@edit');
Route::post('kapal/edit/{kapal}','kapalController@update');
Route::get('kapal/hapus/{kapal}','kapalController@hapus');

Route::get('tiket','tiketController@awal');
Route::get('tiket/tambah','tiketcontroller@tambah');
Route::get('tiket/{tiket}','tiketController@lihat');
Route::post('tiket/simpan','tiketController@simpan');
Route::get('tiket/edit/{tiket}','tiketController@edit');
Route::post('tiket/edit/{tiket}','tiketController@update');
Route::get('tiket/hapus/{tiket}','tiketController@hapus');


Route::get('penumpang','penumpangController@awal');
Route::get('penumpang/{penumpang}','penumpangController@lihat');
Route::post('penumpang/simpan','penumpangController@simpan');
Route::get('penumpang/edit/{penumpang}','penumpangController@edit');
Route::post('penumpang/edit/{penumpang}','penumpangController@update');
Route::get('penumpang/hapus/{penumpang}','penumpangController@hapus');

Route::get('kategori','kategoriController@awal');
Route::get('kategori/{kategori}','kategoriController@lihat');
Route::post('kategori/simpan','kategoriController@simpan');
Route::get('kategori/edit/{kategori}','kategoriController@edit');
Route::post('kategori/edit/{kategori}','kategoriController@update');
Route::get('kategori/hapus/{kategori}','kategoriController@hapus');

Route::get('tujuan','tujuanController@awal');
Route::get('tujuan/{tujuan}','tujuanController@lihat');
Route::post('tujuan/simpan','tujuanController@simpan');
Route::get('tujuan/edit/{tujuan}','tujuanController@edit');
Route::post('tujuan/edit/{tujuan}','tujuanController@update');
Route::get('tujuan/hapus/{tujuan}','tujuanController@hapus');

Route::get('tpt','tptController@awal');
Route::get('tpt/{tpt}','tptController@lihat');
Route::post('tpt/simpan','tptController@simpan');
Route::get('tpt/edit/{tpt}','tptController@edit');
Route::post('tpt/edit/{tpt}','tptController@update');
Route::get('tpt/hapus/{tpt}','tptController@hapus');

Route::get('pengguna','penggunaController@awal');

Route::post('pengguna/simpan','penggunaController@simpan');

Route::get('pengguna/tambah','penggunacontroller@tambah');
Route::get('pengguna/{pengguna}','penggunaController@lihat');
Route::get('pengguna/edit/{pengguna}','penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');
