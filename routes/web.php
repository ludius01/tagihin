<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Client\HomeController@index');

Route::group(["middleware" => ['auth','check-permission']], function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::Resource('client', 'SuperAdmin\ClientController');
    route::get('/delete/{id}',['as'=>'client.delete', 'uses' => 'SuperAdmin\ClientController@destroy']);
  
    Route::resource('paket','SuperAdmin\PaketController');
    route::get('/delete-paket/{id}',['as'=>'paket.delete', 'uses' => 'SuperAdmin\PaketController@destroy']);

    Route::resource('alat','SuperAdmin\AlatController');
    route::get('/delete-alat/{id}',['as'=>'alat.delete', 'uses' => 'SuperAdmin\AlatController@destroy']);

    Route::resource('metode-pembayaran','SuperAdmin\MetodePembayaranController');
    route::get('/delete-metode_pembayaran/{id}',['as'=>'metode_pembayaran.delete', 'uses' => 'SuperAdmin\MetodePembayaranController@destroy']);

    Route::resource('invoice','SuperAdmin\TagihanController');
    Route::get('/delete-invoice/{id}',['as'=>'invoice.delete', 'uses' => 'SuperAdmin\TagihanController@destroy']);
    Route::get('invoice/{id}/konfirmasi','SuperAdmin\TagihanController@konfirmasi')->name('invoice_konfirmasi');

    Route::resource('invoice','SuperAdmin\TagihanController');
    Route::get('invoice2','Superadmin\TagihanController@index2')->name('invoice.index2');
    Route::get('/delete-invoice/{id}',['as'=>'invoice.delete', 'uses' => 'SuperAdmin\TagihanController@destroy']);
    Route::get('invoice/{id}/konfirmasi','SuperAdmin\TagihanController@konfirmasi')->name('invoice_konfirmasi');


    Route::get('laporan-tagihan-bulanan','SuperAdmin\TagihanController@index_bulanan')->name('cetak.index.bulan');
    Route::POST('pilih-cetak-bulanan','SuperAdmin\TagihanController@pilih_bulanan')->name('pilih_cetak_bulanan');
    Route::get('print/{bulan}/bulan/{th}','SuperAdmin\TagihanController@print')->name('print');
    //  Route::get('pilih-cetak-bulanan','SuperAdmin\TagihanController@pilih_bulanan_get')->name('pilih_cetak_bulanan_get');
    
    

    Route::get('laporan-tagihan-tahunan','SuperAdmin\TagihanController@index_tahunan')->name('cetak.index.tahunan');
    Route::POST('pilih-cetak-tahunan','SuperAdmin\TagihanController@pilih_tahunan')->name('pilih_cetak_tahunan');
    Route::get('print/{th}','SuperAdmin\TagihanController@print_tahun')->name('print_tahunan');

     Route::get('superadmin-profile/{id}/edit',                   'HomeController@edit')->name('superadmin-profile.edit');
    Route::post('superadmin-profil/{id}/update',                    'HomeController@update')->name('suprofile.update');
    Route::get('superadmin-profile/{id}',                   'HomeController@show');
});
Auth::routes();
