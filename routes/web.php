<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

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
Route::post('/profile/update-image', [profileController::class, 'UpdateImage'])->name('image.upload.post');
Route::post('/profile/update-info', [profileController::class, 'UpdateInfo'])->name('info.update');

//Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
//Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');