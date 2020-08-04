<?php
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:admin']], function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/siswa','SiswaController@index');
    Route::post('/siswa/create','SiswaController@create');
    Route::get('/siswa/{id}/edit','SiswaController@edit');
    Route::post('/siswa/{id}/update','SiswaController@update');
    Route::get('/siswa/{id}/delete','SiswaController@delete');
    Route::get('/siswa/{id}/profile','SiswaController@profile');
    Route::get('/barang','InventoryController@index');
    Route::post('/barang/create','InventoryController@create');
    Route::get('/barang/{id}/delete','InventoryController@delete');
    Route::get('/pinjam/{id}','InventoryController@PinjamBarang');
    Route::post('/pinjam/{id}','InventoryController@SavePinjamBarang');
    Route::get('/pinjam/{id}/kembalikan','InventoryController@edit');
    Route::post('/pinjam/{id}/kembali','InventoryController@updatekembali');
    Route::get('/pinjam/{jumlah_pinjam}/delete','InventoryController@deletepinjam');
    Route::get('/historypinjam','InventoryController@HistoryPinjam');
});

Route::group(['middleware' => ['auth','checkRole:admin,siswa']], function(){
    Route::get('/dashboard','DashboardController@index');
    Route::post('/barang/create','InventoryController@create');
    Route::get('/pinjam/{id}','InventoryController@PinjamBarang');
    Route::post('/pinjam/{id}','InventoryController@SavePinjamBarang');
    Route::get('/pinjam/{id}/kembalikan','InventoryController@edit');
    Route::post('/pinjam/{id}/kembali','InventoryController@updatekembali');
    Route::get('/pinjam/{jumlah_pinjam}/delete','InventoryController@deletepinjam');
    Route::get('/barang','InventoryController@index');
    Route::get('/historypinjam','InventoryController@HistoryPinjam');
    Route::get('/siswa/{id}/profile','SiswaController@profile');



});

Route::post('/siswa/create','SiswaController@create');
Route::get('/','SiswaController@interaksi');
Route::get('/interaksi','InteraksiController@interaksi');
Route::get('/interaksi/{id}','InteraksiController@edit');
Route::post('/interaksi/{id}/update','InteraksiController@UpdateInteraksi');
Route::post('/interaksi/store','InteraksiController@CreateInteraksi');

