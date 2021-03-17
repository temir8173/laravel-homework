<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [SiteController::class, 'index']);
Route::get('/profile/{id}', [ProfileController::class, 'index']);
Route::post('/profile/update-image', [ProfileController::class, 'UpdateImage'])->name('image.upload.post');
Route::post('/profile/update-info', [ProfileController::class, 'UpdateInfo'])->name('info.update');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');