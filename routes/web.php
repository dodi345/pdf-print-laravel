<?php

use App\Http\Controllers\InvoiceController;
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

Route::controller(InvoiceController::class)->group(function(){
    Route::get('/invoice', 'index')->name('invoice');
    Route::get('/invoice/print', 'print_invoice')->name('invoice.print');
});
