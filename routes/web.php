<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;

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

Route::get('/', function () {
    return view('user/index');
});

Route::get('/portfolio', function () {
    return view('user/portfolio');
});

Route::get('/desain/website', function () {
    return view('user/website');
});

Route::get('/desain/logo', function () {
    return view('user/logo');
});



Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/admin/order', function () {
    return view('admin/order');
});

Route::get('/admin/portfolio', function () {
    return view('admin/portfolio');
});

Route::get('/admin/portfolio', [PortofolioController::class,'index']);
Route::get('/admin/portfolios/create', [PortofolioController::class,'create']);
Route::post('/admin', [PortofolioController::class,'store']);
Route::get('/admin/portfolios/{id}/edit', [PortofolioController::class,'edit']);
Route::put('/admin/portfolios/{id}', [PortofolioController::class,'update']);
Route::delete('/admin/portfolios/{id}', [PortofolioController::class,'destroy']);