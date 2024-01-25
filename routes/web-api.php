<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\MediaController;
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

Route::group(['prefix' => 'auth'], function () {
    Route::post('registration', [AuthController::class, 'register'])->name('user.registration');
    Route::get('verify/{token}', [AuthController::class, 'VerifyAccount'])->name('user.verify.account');
    Route::post('login', [AuthController::class, 'login'])->name('user.login');
    Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('user.forgot.password');
    Route::post('update-password', [AuthController::class, 'updatePassword'])->name('user.reset.password');
});

Route::group(['prefix' => 'resume'], function () {
    Route::post('generate', [ResumeController::class, 'resumeGenerator'])->name('user.resume');
});

Route::group(['prefix'=>'media'], function (){
    Route::post('upload', [MediaController::class, 'uploadMedia'])->name('global.media.upload');
});

