<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function() {
//     return redirect()->intended('/brands');
// });
Route::get('/brands',[BrandController::class,'index']);
Route::get('/products',[ProductController::class,'index']);
Route::get('/add-products',[ProductController::class,'create']);
Route::post('/save-products',[ProductController::class,'store']);
Route::get('/edit-products/{id}',[ProductController::class,'edit']);
Route::post('/update-products',[ProductController::class,'update']);

