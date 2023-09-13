<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TypeproductController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// เมนูผู้ใช้
Route::get('/admin/user/index',[UserController::class, 'index'])->name('u.index');



// ประเภทสินค้า
Route::get('/admin/typeproduct/index',[TypeproductController::class, 'index'])->name('t.index');
Route::get('admin/typeproduct/create', [TypeproductController::class, 'create']);
Route::post('admin/typeproduct/insert',[TypeproductController::class,'insert'] );
Route::get('admin/typeproduct/edit/{id}',[TypeproductController::class, 'edit']);
Route::post('admin/typeproduct/update/{id}',[TypeproductController::class, 'update']);
Route::get('admin/typeproduct/delete/{id}', [TypeproductController::class, 'delete']);




// สินค้า
Route::get('/admin/product/index',[ProductController::class, 'index'])->name('p.index');
Route::get('admin/product/create',[ProductController::class, 'create']);
Route::post('admin/product/insert',[ProductController::class, 'insert']);
Route::get('admin/product/delete/{id}',[ProductController::class, 'delete']);
Route::get('admin/product/edit/{id}',[ProductController::class, 'edit']);