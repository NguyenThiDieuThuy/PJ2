<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BrController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\DetailController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('admin.home');
});

Route::get('/home', [AdminController::class, 'index'])->name('admin.home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login']);
//Route::get('/register',[LoginController::class,'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

//STUDENTS
Route::get('/index', [StudentController::class, 'index'])->name('admin.index');

//hiển thị chi tiết
Route::get('/kiemtra10/{id}', [StudentController::class, 'show']);
//view insert
Route::get('/admin/student/insert', [StudentController::class, 'insert']);
//xử li lưu trữ
Route::post('/createss', [StudentController::class, 'stor']);
//view edit
Route::get('/edit/{id}', [StudentController::class, 'edit']);
//xử lí cập nhật
Route::post('/edit/{id}', [StudentController::class, 'update']);
//Xóa
Route::get('/deletes/{id}', [StudentController::class, 'destroyss']);


//LOCATION
Route::get('/indexl', [LocationController::class, 'indexl'])->name('admin.locations.indexl');

Route::get('/admin/locations/insers', [LocationController::class, 'insers']);
//xử li lưu trữ
Route::post('/createsss', [LocationController::class, 'storesss']);
//view edit
Route::get('/edits_l/{id}', [LocationController::class, 'edits_l']);
//xử lí cập nhật
Route::post('/edits_l/{id}', [LocationController::class, 'updates']);
//Xóa
Route::get('/deletel/{id}', [LocationController::class, 'destroyl']);

//TYPE

Route::get('/indexs', [TypeController::class, 'indexs'])->name('admin.type.indexs');
//view insert
Route::get('/admin/type/insert', [TypeController::class, 'insert']);
//xử li lưu trữ
Route::post('/creates', [TypeController::class, 'store']);
//view edit
Route::get('/editt/{id}', [TypeController::class, 'editt']);
//xử lí cập nhật
Route::post('/editt/{id}', [TypeController::class, 'update']);
//Xóa
Route::get('/deletet/{id}', [TypeController::class, 'destroys']);




///BOOK
Route::get('/indes', [BookController::class, 'indes'])->name('admin.book.indes');
Route::get('/kiemtra/{id}', [BookController::class, 'show'])->name('admin.book.details');
//view insert
Route::get('/admin/book/insertb', [BookController::class, 'insertb'])->name('book.insertb');
//xử li lưu trữ
Route::post('/create', [BookController::class, 'storeb']);
//view edit
Route::get('/edis/{id}', [BookController::class, 'edis']);
//xử lí cập nhật
Route::post('/edis/{id}', [BookController::class, 'update']);
//Xóa
Route::get('/delete/{id}', [BookController::class, 'destroy']);


//BorrowPay
Route::get('/indexbr', [BrController::class, 'indexbr'])->name('admin.borrowpay.indexbr');
Route::get('/admin/borrowpay/insertbr', [BrController::class, 'insertbr'])->name('borrowpay.insertbr');

Route::post('/createbr', [BrController::class, 'storebr']);
Route::get('/editbr/{id}', [BrController::class, 'editbr']);
Route::post('/editbr/{id}', [BrController::class, 'updatek']);
Route::get('/deletebr/{id}', [BrController::class, 'destroybr']);

////

////detail

Route::get('/detail/{id}', [DetailController::class, 'detail'])->name('admin.borrowpay.detail');
Route::get('/admin/borrowpay/insertdetail', [DetailController::class, 'insertdetail'])->name('admin.borrowpay.insertdetail');
Route::post('/createdetail', [DetailController::class, 'storedetail']);
Route::get('/editd/{id}', [DetailController::class, 'editd']);
//xử lí cập nhật
Route::post('/editd/{id}', [DetailController::class, 'updated']);
Route::get('/deleted/{id}', [DetailController::class, 'destroyd']);
//view insert




