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
    // Route::get('client', 'SuperAdmin\ClientController@index')->name('client.index');
    // Route::get('client/creat', 'SuperAdmin\ClientController@create')->name('client.create');

    Route::get('produk','SuperAdmin\ProdukController@index')->name('produk.index');
    Route::get('alat','SuperAdmin\AlatController@index')->name('alat.index');
    Route::get('metode-pembayaran','SuperAdmin\PembayaranController@index')->name('pembayaran.index');
    Route::get('invoice','SuperAdmin\PembayaranController@index_invoice')->name('invoice.index');
    Route::get('laporan-tagihan','SuperAdmin\TagihanController@index')->name('tagihan.index');
  
 
});
Auth::routes();
