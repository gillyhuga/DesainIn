<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\OrderController;

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

Route::get('/desain/portfolio', function () {
    return view('user/portfolio');
});

Route::get('/desain/website', function () {
    return view('user/website');
});

Route::get('/desain/logo', function () {
    return view('user/logo');
});



Route::middleware(['auth:sanctum', 'verified'])
->resource('order', OrderController::class);

Route::middleware(['auth:sanctum', 'verified'])
->get('/portfolio', [PortofolioController::class,'index']);
Route::middleware(['auth:sanctum', 'verified'])
->get('portfolios/create', [PortofolioController::class,'create']);
// Route::post('/admin', [PortofolioController::class,'store']);
Route::middleware(['auth:sanctum', 'verified'])
->get('/portfolios/{id}/edit', [PortofolioController::class,'edit']);
Route::middleware(['auth:sanctum', 'verified'])
->put('/portfolios/{id}', [PortofolioController::class,'update']);
Route::middleware(['auth:sanctum', 'verified'])
->delete('/portfolios/{id}', [PortofolioController::class,'destroy']);

// Route::get('/admin/dashboard', [PortofolioController::class,'count']);

Route::middleware(['auth:sanctum', 'verified'])
->get('/dashboard', [PortofolioController::class,'count']);
