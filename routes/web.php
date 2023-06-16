<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\admin;

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

route::get('/home', [home::class, 'home']);

route::get('/produk', [home::class, 'produk']);

Route::get('admin', [admin::class, 'index']);

Route::get('admin/produk', [admin::class, 'produk']);

Route::get('admin/add_produk', [admin::class, 'add_produk']);

route::post('admin/save_produk', [admin::class, 'save_produk']);

route::get('admin/{id}/edit_produk', [admin::class, 'edit_produk']);

route::post('admin/{id}/update_produk', [admin::class, 'update_produk']);

route::post('admin/{id}', [admin::class, 'delete_produk']);

