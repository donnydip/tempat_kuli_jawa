<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');
});
// Route::get('/cekdata',[UserController::class, 'showtukang']);

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['preventbackbutton','auth','verified']],function (){
  Route::group(['middleware' => ['auth']],function (){
    Route::get('/acctukang',[TukangController::class, 'acc']);
    Route::post('/acctukang',[TukangController::class, 'acctukang'])->name('acc');
    Route::get('/tolaktukang',[TukangController::class, 'tolak']);
    Route::post('/tolaktukang',[TukangController::class, 'toltukang'])->name('tolak');
    // Route::get('/tampil',[OrderController::class, 'TampilAdmin']);
    Route::get('/formtukang',[TukangController::class, 'edit'])->name('formtukang');
    Route::post('/formtukang',[TukangController::class, 'store'])->name('daftartukang');
    Route::get('/tukang',[TukangController::class, 'tukang'])->name('tukang');
    Route::get('/detail',[TukangController::class, 'detailorder']);
    Route::post('/detail',[TukangController::class, 'detailorder'])->name('detailorder');
});

Route::group(['middleware' => ['role:user']], function () {

    Route::get('/userhome',[HomeController::class, 'index'])->name('userhome');
        Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
        Route::get('userprofile', ['as' => 'userprofile.edit', 'uses' => 'App\Http\Controllers\UserProfileController@edit']);
        Route::put('userprofile', ['as' => 'userprofile.update', 'uses' => 'App\Http\Controllers\UserProfileController@update']);
        Route::put('userprofile/userpassword', ['as' => 'userprofile.password', 'uses' => 'App\Http\Controllers\UserProfileController@password']);
        Route::get('/order',[OrderController::class, 'show']);
        Route::post('/order',[OrderController::class, 'store'])->name('order');
        Route::get('/order_confirm',[OrderController::class, 'invoice'])->name('invoice');
        Route::post('/pilihtukang',[OrderController::class, 'getTukang'])->name('getTukang');
        Route::get('/orders/order_user',[UserController::class, 'orderuser']);
        Route::post('/orders/batalorder',[UserController::class, 'batalorder'])->name('batalorder');
    });

    Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard',[HomeController::class, 'admin'])->name('home');
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons');
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::get('/daftar_detail', function () {return view('detail.detail_tukang');});

});
});
