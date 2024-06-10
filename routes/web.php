<?php

use App\Http\Controllers\Admin\SuporteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::prefix('suporte')->group(function () {
  Route::get('/', [SuporteController::class, 'index'])->name('suporte.index');
  Route::get('/create', [SuporteController::class, 'create'])->name('suporte.crete');
});
