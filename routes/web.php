<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\Download;
use App\Http\Controllers\MitraController;
use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware' => ['check', 'prevent-back-history']], function(){
    Route::get('/', [AdminController::class, 'home'])->name('home');
});

Route::group(['middleware' => ['guest']], function(){
    Route::post('/login',[AdminController::class, 'login'])->name('login');
});

// Route::group(['middleware' => ['prevent-back-history']], function(){
Route::post('/logout',[AdminController::class, 'logout'])->name('logout');
// });
Route::group(['middleware' => ['auth', 'hakakses:admin', 'prevent-back-history']], function(){
    Route::get('/daftarMitra',[MitraController::class, 'index'])->name('daftarMitra');
    Route::get('/tambahMitra',[MitraController::class, 'tambahMitra'])->name('tambahMitra');
    Route::post('/insertData',[MitraController::class, 'insertData'])->name('insertData');
    Route::get('/tampilkanData/{id}',[MitraController::class, 'tampilkanData'])->name('tampilkanData');
    Route::post('/updateData/{id}',[MitraController::class, 'updateData'])->name('updateData');
    Route::get('/deleteData/{kodemitra}',[MitraController::class, 'deleteData'])->name('deleteData');
    Route::get('/deleteFile/{kodemitra}/{namafile}',[MitraController::class, 'deleteFile'])->name('deleteFile');
    Route::get('/detailData/{kodemitra}',[MitraController::class, 'detailData'])->name('detailData');
    Route::get('/uploadPage/{kodemitra}',[MitraController::class, 'uploadPage'])->name('uploadPage');
    Route::post('/upload',[MitraController::class, 'upload'])->name('upload');
    Route::post('/importExcel',[MitraController::class, 'importExcel'])->name('importExcel');
    Route::get('/download', [Download::class, 'download'])->name('download');
});

Route::group(['middleware' => ['auth', 'hakakses:superadmin', 'prevent-back-history']], function(){
    Route::get('/daftarAdmin',[adminController::class, 'daftarAdmin'])->name('daftarAdmin');
    Route::get('/tambahAdmin',[adminController::class, 'tambahAdmin'])->name('tambahAdmin');
    Route::post('/insertAdmin',[adminController::class, 'insertAdmin'])->name('insertAdmin');
    Route::get('/deleteAdmin/{id}',[adminController::class, 'deleteAdmin'])->name('deleteAdmin');
    Route::post('/updateAdmin/{id}',[adminController::class, 'updateAdmin'])->name('updateAdmin');
    Route::get('/daftarMitra_Admin',[MitraController::class, 'index_Admin'])->name('daftarMitra_Admin');
});




