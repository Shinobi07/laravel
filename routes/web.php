<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\http\Controllers\PhotoController;

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
    return view('search');
});


Route::get('/users/search', [SearchController::class, 'save'])->name('users.save');

Route::post('/output', [SearchController::class, 'search'])->name('users.search');

Route::get('/output', [SearchController::class, 'search'])->name('users.aaa');

Route::get('/update', [SearchController::class, 'detail'])->name('users.bbb');

Route::get('/user/detail/{id}', [SearchController::class, 'detail'])->name('users.detail');

Route::post('/user/note/{id}', [SearchController::class, 'store'])->name('users.store');

Route::post('/user/detail_store/{id}/{app_id}', [SearchController::class, 'detail_store'])->name('users.detail_store');

Route::get('/user/application/{id}/{app_id}', [SearchController::class, 'upapp'])->name('users.upapp');

Route::get('/user/registration_info/{id}', [SearchController::class, 'register_info'])->name('user.register_info');

Route::post('/user/register_info_store/{id}',[SearchController::class, 'register_info_store'])->name('users.register_info_store');

Route::get('/user/bank_info/{id}', [SearchController::class, 'bank_info'])->name('user.bank_info');

Route::post('/user/bank_info_store/{id}', [SearchController::class, 'bank_info_store'])->name('user.bank_info_store');

Route::get('/user/required_doc/{id}', [SearchController::class, 'required_doc'])->name('user.required_doc');

Route::get('/user/required_list/{id}', [SearchController::class, 'required_list'])->name('user.required_list');

Route::get('/user/required_first/{id}', [SearchController::class, 'required_first'])->name('user.required_first');

///////////////////////////////Photo//////////////////////////

Route::get('/user/products_purchase/{id}', [PhotoController::class, 'products_purchase'])->name('user.products_purchase');

Route::get('/user/products_purchase/{id}/1', [PhotoController::class, 'img_statu'])->name('user.img_good');

Route::get('/user/products_purchase/{id}/2', [PhotoController::class, 'img_statu'])->name('user.img_bad');

Route::get('/user/products_purchase/{id}/3', [PhotoController::class, 'img_del'])->name('user.img_del');

Route::get('/user/id_card/{id}', [PhotoController::class, 'id_card'])->name('user.id_card');

Route::get('/user/insurance_card/{id}', [PhotoController::class, 'insurance_card'])->name('user.insurance_card');

Route::get('/user/public_bill/{id}', [PhotoController::class, 'public_bill'])->name('user.public_bill');

Route::get('/user/id_sel/{id}', [PhotoController::class, 'id_selfie'])->name('user.id_sel');

Route::get('user/bank_card/{id}', [PhotoController::class, 'bank_card'])->name('user.bank_card');

Route::get('/user/other_img/{id}', [PhotoController::class, 'other'])->name('user.other');

Route::get('/user/modify/{id}', [PhotoController::class, 'modify'])->name('user.modify');