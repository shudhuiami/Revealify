<?php

use App\Http\Controllers\FrontController;
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
Route::get('/', [FrontController::class, 'landing_page'])->name('landing.page');
Route::get('/landing-page-two', [FrontController::class, 'landing_page_two'])->name('landing.page.two');
Route::get('/login', [FrontController::class, 'login'])->name('login');
Route::get('/register', [FrontController::class, 'register'])->name('register');
Route::get('/forgot', [FrontController::class, 'forgot'])->name('forgot');
Route::get('/reset/{token}', [FrontController::class, 'reset'])->name('reset');

Route::get('/profile', [FrontController::class, 'profile'])->name('profile')->middleware('FrontLoginCheck');;

Route::get('/generate', [FrontController::class, 'generate'])->name('generate');
Route::get('/{id}/generate', [FrontController::class, 'generate'])->name('generate.selected');
Route::get('/template-download', [FrontController::class, 'template_download'])->name('template.download');

Route::get('/theme-selection', [FrontController::class, 'theme_selection'])->name('theme.selection');

Route::get('template-1', [FrontController::class, 'template_1'])->name('template.one');
Route::get('template-2', [FrontController::class, 'template_2'])->name('template.two');
Route::get('template-3', [FrontController::class, 'template_3'])->name('template.three');
Route::get('template-4', [FrontController::class, 'template_4'])->name('template.four');
Route::get('template-5', [FrontController::class, 'template_5'])->name('template.five');



