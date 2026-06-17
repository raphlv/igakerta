<?php

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

use App\Http\Controllers\MainController;
use App\Http\Controllers\SubmissionController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/katalog-buku', [MainController::class, 'bookstore'])->name('bookstore');
Route::get('/jurnal', [MainController::class, 'jurnal'])->name('jurnal');
Route::get('/author-services', [MainController::class, 'authorServices'])->name('author-services');
Route::get('/news', [MainController::class, 'news'])->name('news.index');
Route::get('/news/{slug}', [MainController::class, 'newsDetail'])->name('news.show');

Route::get('/mitra', [MainController::class, 'mitra'])->name('mitra');
Route::get('/hubungi-kami', [MainController::class, 'hubungiKami'])->name('hubungi-kami');
Route::get('/tentang-kami', [MainController::class, 'tentangKami'])->name('tentang-kami');

Route::post('/submit-manuscript', [SubmissionController::class, 'store'])->name('submission.store');
Route::post('/contact', [MainController::class, 'storeContact'])->name('contact.store');
