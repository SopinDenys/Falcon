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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function (){
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.index');
    (new \App\Models\ImportProduct())->getImportProductsToDB();
    dd('done');
    Route::get('/import_products', [\App\Http\Controllers\Admin\ImportProductController::class, 'create']);
    Route::post('/import_products', [\App\Http\Controllers\Admin\ImportProductController::class, 'store']);
});

Route::get('/', function () {
    return view('index');
});
Route::get('/checkout', function (){
   return view('checkout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
