<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/add/blog', [BlogController::class, 'add'])->name('add.blog');
    Route::post('/new/blog', [BlogController::class, 'create'])->name('create.blog');
    Route::get('/manage/blog', [BlogController::class, 'manage'])->name('manage.blog');
    Route::get('/edit/blog/{id}', [BlogController::class, 'edit'])->name('edit.blog');
    Route::post('/update/blog/{id}', [BlogController::class, 'update'])->name('update.blog');
    Route::post('/delete/blog/{id}', [BlogController::class, 'delete'])->name('delete.blog');




});
