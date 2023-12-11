<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\Addvisitcontroller;
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

Route::get('/bookvisit', [AuthManager::class,'bookvisit'])->name('bookvisit');
Route::post('/bookvisit', [AuthManager::class,'bookvisitPost'])->name('bookvisit.post');
Route::get('/addvisit', [Addvisitcontroller::class,'addvisit'])->name('addvisit');
Route::post('/addvisit', [Addvisitcontroller::class,'addvisitPost'])->name('addvisit.post');
Route::get('/editvisit/{id}', [Addvisitcontroller::class,'edit'])->name('editvisit');
Route::put('/updatevisit/{id}', [Addvisitcontroller::class,'update'])->name('updatevisit');
Route::post('/deletevisit/{id}', [Addvisitcontroller::class,'remove'])->name('deletevisit');
Route::get('/editbook/{id}', [AuthManager::class,'edit'])->name('editbook');
Route::put('/updatebook/{id}', [AuthManager::class,'update'])->name('updatebook');
Route::post('/cancelbook/{id}', [AuthManager::class,'cancel'])->name('cancelbook');
