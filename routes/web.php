<?php

use App\Http\Controllers\BookVisitController;
use App\Http\Controllers\Addvisitcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DayCareInfoController;
use App\Http\Controllers\VerifyDayCareController;
use App\Http\Controllers\ViewDayCareController;
use App\Http\Controllers\CommentsController;
use App\Http\App\Http\Middleware\Role;
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



Route::get('/bookvisit/{id}', [BookVisitController::class,'bookvisit'])->name('bookvisit');
Route::post('/bookvisit', [BookVisitController::class,'bookvisitPost'])->name('bookvisit.post');
Route::post('/availTime', [BookVisitController::class,'availTime'])->name('availTime');
Route::get('/editbook/{id}/{daycare_id}', [BookVisitController::class,'edit'])->name('editbook');
Route::put('/updatebook/{id}', [BookVisitController::class,'update'])->name('updatebook');
Route::post('/cancelbook/{id}', [BookVisitController::class,'cancel'])->name('cancelbook');
Route::get('/addvisit', [Addvisitcontroller::class,'addvisit'])->name('addvisit');
Route::post('/addvisit', [Addvisitcontroller::class,'addvisitPost'])->name('addvisit.post');
Route::get('/viewvisit', [Addvisitcontroller::class,'viewvisit'])->name('viewvisit');
Route::get('/editvisit/{id}', [Addvisitcontroller::class,'edit'])->name('editvisit');
Route::put('/updatevisit/{id}', [Addvisitcontroller::class,'update'])->name('updatevisit');
Route::post('/deletevisit/{id}', [Addvisitcontroller::class,'remove'])->name('deletevisit');
Route::get('/approvevisit', [BookVisitController::class,'approvevisit'])->name('approvevisit');
Route::get('/approvalvisit/{id}', [BookVisitController::class,'editapprove'])->name('approvalvisit');
Route::put('/approvalvisit/{id}', [BookVisitController::class,'approvalvisit'])->name('approvalvisit');

Route::post('/comments', [CommentsController::class, 'store']);
Route::get('/comments', [CommentsController::class, 'index']);


Auth::routes();


// routes/web.php or routes/web.php
Route::get('/users/{user}/password_change', [UserController::class, 'editpass'])->name('users.editpass');
Route::patch('/users/{user}/change', [UserController::class, 'change'])->name('users.change');

Route::get('/users/{user}/editt', [UserController::class, 'editt'])->name('users.editt');
Route::patch('/users/{user}/update1', [UserController::class, 'update1'])->name('users.update1');

Route::get('/user', [UserController::class, 'index'])->name('users.index');
Route::patch('/user/{user}/edit', [UserController::class, 'update'])->name('users.edit');

Route::get('/details_daycare', [ViewDayCareController::class, 'index'])->name('index');
Route::get('/details_daycare/{user}/show', [ViewDayCareController::class, 'show'])->name('show');



// web.php





Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('/admin/user', UserAdminController::class);
    Route::resource('daycare', DayCareInfoController::class);
   
  
});

Route::group(['middleware' => ['auth', 'role:1']], function () {
    Route::get('/admin/verify/daycares', [VerifyDayCareController::class, 'index'])->name('admin.verify.verify');
    Route::get('/admin/verify/daycares/{user}/show', [VerifyDayCareController::class, 'show'])->name('admin.verify.show');
    Route::get('/admin/verify/daycares/{user}/edit', [VerifyDayCareController::class, 'edit'])->name('admin.verify.edit');
    Route::patch('/admin/verify/daycares/{user}/update', [VerifyDayCareController::class, 'update'])->name('admin.verify.update');
    Route::get('/admin', [UserAdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/{user}/edit', [UserAdminController::class, 'edit'])->name('admin.edit');
    Route::patch('/admin/{user}/update', [UserAdminController::class, 'update'])->name('admin.update');
    Route::get('/admin/create', [UserAdminController::class, 'create'])->name('admin.create');
    Route::get('/admin/{user}/show', [UserAdminController::class , 'show'])->name('admin.show');
    Route::delete('/admin/{user}/destroy', [UserAdminController::class, 'destroy'])->name('admin.destroy');
    Route::post('/admin/store', [UserAdminController::class,'store'])->name('admin.store');
});

Route::group(['middleware' => ['auth', 'role:2']], function () {
    Route::get('/daycare/{user}/edit', [DayCareInfoController::class, 'edit'])->name('operator.daycare.edit');
    Route::patch('/daycare/{user}/update', [DayCareInfoController::class, 'update'])->name('operator.daycare.update');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('role:1');
Route::get('/operator/home', [App\Http\Controllers\HomeController::class, 'operatorHome'])->name('operator.home')->middleware('role:2');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login') ;

Route::get('/', function () {
    return view('login');
});
