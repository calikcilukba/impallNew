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

//home
Route::get('/login','ControllerAuth@index')->name('login');
Route::post('/postlogin','ControllerAuth@postlogin');
Route::get('/katalog/{id}', 'halamanutamaController@index');
Route::get('/katalog/detail_katalog/{id}', 'halamanutamaController@detail_katalog');
Route::get('/filter/{id}', 'halamanutamaController@filter');
Route::get('/keranjang', 'halamanutamaController@keranjang')->name('keranjang');
Route::get('/service','halamanutamaController@service');
Route::get('/service/{id}','halamanutamaController@service_handphone');
Route::get('/service/{id}/{ids}','halamanutamaController@kendala');
Route::get('/service/{id}/{ids}/{idss}','halamanutamaController@detail_service');
Route::get('/keranjang/{id}','halamanutamaController@tambah_keranjang')->name('tambahkeranajang');
Route::get('/search','halamanutamaController@search')->name('search');
Route::post('/inputreparasi','halamanutamaController@inputreparasi')->name('inputreparasi');

Route::group(['middleware' => 'authuser'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/infoakun','HomeController@biodata_diri')->name('infoakun');
    Route::patch('/update','HomeController@update')->name('updateakun');
    Route::get('/pesanan', 'HomeController@pesanan')->name('pesanan');
    Route::get('/home/lihatservice','HomeController@lihatservice')->name('service');
    Route::post('/checkout','halamanutamaController@checkout')->name('checkout');
    Route::post('/bayar','halamanutamaController@bayar')->name('bayar');
    Route::get('/hapus_item/{id}','halamanutamaController@getHapusItem')->name('hapus_item');
});

Route::group(['middleware' => 'authadmin'], function()
{
    route::get('/lihatservice','ControllerAdmin@service');
    route::get('/lihatpembelian','ControllerAdmin@pembelian');
    route::patch('/ubah_verifikasi/{id}','ControllerAdmin@updateverifikasi')->name('ubah_verifikasi');
    route::patch('/ubah_verifikasiservice/{id}','ControllerAdmin@updateverifikasiservice')->name('ubah_verifikasiservice');
    route::get('/dashboard', 'ControllerAdmin@index');
    route::get('/pengguna','ControllerAdmin@pengguna');
    route::get('/pengguna/{id}/delete','ControllerAdmin@delete');
    route::get('/dataservices','ControllerAdmin@dataproductservice');
    route::post('/dataservices/create','ControllerAdmin@dscreate');
    route::patch('/dataservices/{id}/edit','ControllerAdmin@updateds');
    route::get('/dataservices/{id}/delete','ControllerAdmin@deleteds');
    route::get('/handphone','controllerproduct@handphone');
    route::get('/sparepart','controllerproduct@sparepart');
    route::post('/handphone/create','controllerproduct@hcreate');
    route::post('/sparepart/create','controllerproduct@screate');
    route::patch('/handphone/{id}/edit','controllerproduct@updateh');
    route::patch('/sparepart/{id}/edit','controllerproduct@updates');
    route::get('/handphone/{id}/delete','controllerproduct@deleteh');
    route::get('/sparepart/{id}/delete','controllerproduct@deletes');
    Route::get('/searchspar','controllerproduct@searchspar')->name('searchspar');
    Route::get('/searchhand','controllerproduct@searchhand')->name('searchhand');
    Route::get('/searchuser','ControllerAdmin@searchuser')->name('searchuser');
});
