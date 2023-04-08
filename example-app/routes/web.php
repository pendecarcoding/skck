<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SidikJariController;
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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/pendaftaran', [FrontendController::class, 'pendaftaran'])->name('pendaftaran.index');

Route::post('/addpendaftaran', [FrontendController::class, 'addpendaftaran'])->name('addpendaftaran');
Route::match(['get','post'],'/terbitkartu', [FrontendController::class, 'terbitkartu'])->name('terbitkartu');
Route::match(['get','post'],'/downloadkartu/{id}', [FrontendController::class, 'downloadkartu'])->name('downloadkartu');


Route::get('/rumussidikjari', [SidikJariController::class, 'rumussidikjari'])->name('rumussidikjari');
Route::match(['get','post'],'getdatafromtoken', [SidikJariController::class, 'getdatafromtoken'])->name('getdatafromtoken');
Route::match(['get','post'],'updatesidikjari', [SidikJariController::class, 'updatesidikjari'])->name('updatesidikjari');

