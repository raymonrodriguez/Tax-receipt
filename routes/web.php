<?php

use Illuminate\Support\Facades\Route;
use App\Models\Voucher;
use App\Http\Controllers\Voucher\VoucherController;
use Illuminate\Support\Facades\Http;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::controller(VoucherController::class)->group(function () {

    Route::get('/vouchers', 'index')->name('vouchers.index');
    Route::get('/vouchers/assignment', 'assignmentVoucher')->name('vouchers.assignment.index');
});
