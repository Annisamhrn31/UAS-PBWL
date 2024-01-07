<?php

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
    return view('layouts.app');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [App\Http\Controllers\LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/member', [App\Http\Controllers\MemberController::class, 'index'])->name('member');
Route::get('/member/create', [App\Http\Controllers\MemberController::class, 'create'])->name('member_create');
Route::post('/member/store', [App\Http\Controllers\MemberController::class, 'store'])->name('member_store');
Route::get('/member/edit/{id}', [App\Http\Controllers\MemberController::class, 'edit'])->name('member_edit');
Route::put('/member/update/{id}', [App\Http\Controllers\MemberController::class, 'update'])->name('member_update');
Route::delete('/member/delete/{id}', [App\Http\Controllers\MemberController::class, 'destroy'])->name('member_delete');

Route::get('/operator', [App\Http\Controllers\UserController::class, 'index'])->name('operator');
Route::get('/operator/create', [App\Http\Controllers\UserController::class, 'create'])->name('operator_create');
Route::post('/operator/store', [App\Http\Controllers\UserController::class, 'store'])->name('operator_store');
Route::get('/operator/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('operator_edit');
Route::put('/operator/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('operator_update');
Route::delete('/operator/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('operator_delete');

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index'])->name('transaksi');
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create'])->name('transaksi_create');
Route::post('/transaksi/store', [App\Http\Controllers\TransaksiController::class, 'store'])->name('transaksi_store');
Route::get('/transaksi/edit/{id}', [App\Http\Controllers\TransaksiController::class, 'edit'])->name('transaksi_edit');
Route::put('/transaksi/update/{id}', [App\Http\Controllers\TransaksiController::class, 'update'])->name('transaksi_update');
Route::delete('/transaksi/delete/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy'])->name('transaksi_delete');
