<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormPemesananController;
use App\Http\Livewire\Index;

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
Route::get('/', Index::class);

Route::post('/send-form-pemesanan', [FormPemesananController::class, 'sendFormPemesanan'])->name('send-form-pemesanan');
