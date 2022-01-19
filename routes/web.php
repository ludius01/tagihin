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

    Route::get('invoice','SuperAdmin\PembayaranController@index_invoice')->name('invoice.index');
    Route::get('laporan-tagihan','SuperAdmin\TagihanController@index')->name('tagihan.index');
  
 
});
Auth::routes();
