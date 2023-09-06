<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('home');
});

Route::get('teamviewer-mexico-distribuidor', function () {
    return view('teamviewer');
});

Route::get('gracias', function () {
    return view('gracias');
})->name('gracias');

Route::post('send-lead', [ContactController::class, 'sendLead'])->name('send-lead');
