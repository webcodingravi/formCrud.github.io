<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormcrudController;

Route::resource('formcrud', FormcrudController::class);

Route::get('search_trem',[FormcrudController::class, 'search'])->name('search_trem');