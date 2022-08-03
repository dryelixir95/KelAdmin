<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BarangController;
use App\Http\Controllers\Backend\FilmController;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/table', function () {
    return view('admin.table');
})->name('table');


Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');

//semua route untuk user

Route::prefix('users')->group(function(){
    Route::get('/view',[UserController::class,'UserView'])->name('user.view');
    Route::get('/add',[UserController::class,'UserAdd'])->name('user.add');
    Route::post('/store',[UserController::class,'UserStore'])->name('user.store');
    Route::get('/edit/{id}',[UserController::class,'UserEdit'])->name('user.edit');
    Route::post('/update/{id}',[UserController::class,'UserUpdate'])->name('user.update');
    Route::get('/delete/{id}',[UserController::class,'UserDelete'])->name('user.delete');
});

Route::prefix('barangs')->group(function(){
    Route::get('/view',[BarangController::class,'BarangView'])->name('barang.view');
    Route::get('/add',[BarangController::class,'BarangAdd'])->name('barang.add');
    Route::post('/store',[BarangController::class,'BarangStore'])->name('barang.store');
    Route::get('/edit/{id}',[BarangController::class,'BarangEdit'])->name('barang.edit');
    Route::post('/update/{id}',[BarangController::class,'BarangUpdate'])->name('barang.update');
    Route::get('/delete/{id}',[BarangController::class,'BarangDelete'])->name('barang.delete');
});

Route::prefix('films')->group(function(){
    Route::get('/view',[FilmController::class,'FilmView'])->name('film.view');
    Route::get('/add',[FilmController::class,'FilmAdd'])->name('film.add');
    Route::post('/store',[FilmController::class,'FilmStore'])->name('film.store');
    Route::get('/edit/{id}',[FilmController::class,'FilmEdit'])->name('film.edit');
    Route::post('/update/{id}',[FilmController::class,'FilmUpdate'])->name('film.update');
    Route::get('/delete/{id}',[FilmController::class,'FilmDelete'])->name('film.delete');
});
