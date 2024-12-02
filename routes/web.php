<?php

use App\Http\Controllers\AdminControlelr;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class ,'index'])->name('post');
Route::resource('admin', AdminControlelr::class);

Route::get('admin/delete/{id}', [AdminControlelr::class ,'destroy'])->name('admin.delete');
