<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/',[AdminController::class, 'index'])->name('welcome');
Route::get('/dashboard',[AdminController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/collect',[AdminController::class, 'show'])->middleware('auth')->name('collect');
Route::post('/collect/search',[AdminController::class, 'find'])->middleware('auth')->name('collect.search');
Route::get('/registration',[AdminController::class, 'registration'])->middleware('auth')->name('registration');
Route::post('/registration/store',[AdminController::class, 'registrationStore'])->middleware('auth')->name('registration.store');
Route::post('/payfee/{studentFee}',[AdminController::class, 'payFee'])->middleware('auth')->name('pay.fee');
Route::get('/collect/studentfee/{student}',[AdminController::class, 'studentFee'])->middleware('auth')->name('student.fee');
Route::get('/unpaid',[AdminController::class, 'unpaidFees'])->middleware('auth')->name('unpaid.fee.list');
Route::get('/classtypes',[AdminController::class, 'viewClassTypes'])->middleware('auth')->name('view.class.types');
Route::get('/classtypes/classes/{classType}',[AdminController::class, 'viewClasses'])->middleware('auth')->name('view.classes');
//registration view.classes
require __DIR__.'/auth.php';