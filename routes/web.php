<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
use App\Http\Controllers\RegisterController;


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



//dashboard
Route::get('/dashboard','App\Http\Controllers\DashboardController@dashboard');
    //input data
    Route::get('/dashboard/tambahdashboard','App\Http\Controllers\DashboardController@tambahdashboard');
    Route::post('/dashboard/store','App\Http\Controllers\DashboardController@store');
   //edit data
   Route::get('/dashboard/edit/{id}','App\Http\Controllers\DashboardController@edit');
   Route::post('/dashboard/update','App\Http\Controllers\DashboardController@update');
   //hapus data
   Route::get('/dashboard/hapus/{id}','App\Http\Controllers\DashboardController@hapus');
   //searching
   Route::get('/dashboard/cari','App\Http\Controllers\DashboardController@cari');
   //detail
   Route::get('/dashboard/detail/{id}', 'App\Http\Controllers\DashboardController@detail')->name('dashboard.detail');


//top rated
Route::get('/toprated','App\Http\Controllers\TopratedController@toprated');
    //input data
    Route::get('/toprated/tambahtop','App\Http\Controllers\TopratedController@tambahtop');
    Route::post('/toprated/store','App\Http\Controllers\TopratedController@store');
    //edit data
    Route::get('/toprated/edit/{id}','App\Http\Controllers\TopratedController@edit');
    Route::post('/toprated/update','App\Http\Controllers\TopratedController@update');
     //hapus data
    Route::get('/toprated/hapus/{id}','App\Http\Controllers\TopratedController@hapus');
    //searching
    Route::get('/toprated/cari','App\Http\Controllers\TopratedController@cari');
    //detail
   Route::get('/toprated/detail/{id}', 'App\Http\Controllers\TopratedController@detail')->name('toprated.detail');

    
//upcoming
Route::get('/upcoming','App\Http\Controllers\UpcomingController@upcoming');
    //input data
    Route::get('/upcoming/tambahupcoming','App\Http\Controllers\UpcomingController@tambahupcoming');
    Route::post('/upcoming/store','App\Http\Controllers\UpcomingController@store');
    //edit data
    Route::get('/upcoming/edit/{id}','App\Http\Controllers\UpcomingController@edit');
    Route::post('/upcoming/update','App\Http\Controllers\UpcomingController@update');
         //hapus data
   Route::get('/upcoming/hapus/{id}','App\Http\Controllers\UpcomingController@hapus');
   //detail
   Route::get('/upcoming/detail/{id}', 'App\Http\Controllers\UpcomingController@detail')->name('upcoming.detail');

//kategori genre
Route::get('/jenisgenre','App\Http\Controllers\KategoriController@jenisgenre');
    //input data
    Route::get('/jenisgenre/tambahkategori','App\Http\Controllers\KategoriController@tambahkategori');
    Route::post('/jenisgenre/store','App\Http\Controllers\KategoriController@store');
    //edit data
    Route::get('/jenisgenre/edit/{id}','App\Http\Controllers\KategoriController@edit');
    Route::post('/jenisgenre/update','App\Http\Controllers\KategoriController@update');
    //hapus data
   Route::get('/jenisgenre/hapus/{id}','App\Http\Controllers\KategoriController@hapus');

   Route::get('/register' ,'App\Http\Controllers\LoginController@reg');
   Route::post('/register/aksi' ,'App\Http\Controllers\LoginController@regaksi')->name('aksireg');

   Route::get('/login' ,'App\Http\Controllers\LoginController@login')->middleware('guest');       
   Route::post('/login/aksi' ,'App\Http\Controllers\LoginController@loginaksi');

   Route::post('/logout' ,'App\Http\Controllers\LoginController@logout'); 
