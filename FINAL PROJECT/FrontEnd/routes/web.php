<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrendController;
use App\Http\Controllers\ApiController;
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

// Route::get('/', function () {
//     return view('pages/index');
// });

Route::get('/', function () {return view('welcome');});

Route::get('/home', function () {return view('welcome');});

Route::get('/dashboard', function () {return view('/pages/trending');})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [TrendController::class, 'getTrends'])->name('dashboard');

    Route::get('news', function () {
        return view('pages/news-pages/news-search');
    });
    Route::get('news-crawl', [ApiController::class, 'crawlNews']);

    Route::get('youtube', function () {
        return view('pages/youtube-pages/youtube-search');
    });
    Route::get('youtube-crawl', [ApiController::class, 'crawlYoutube']);

    Route::get('playstore', function () {
        return view('pages/playstore-pages/playstore-search');
    });
    Route::get('playstore-crawl', [ApiController::class, 'crawlPlaystore']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';