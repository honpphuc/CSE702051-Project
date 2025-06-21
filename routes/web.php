<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/main', function (){
    return view('home');
})->name('main');

Route::get('/infor', function () {
    return view('profile.news.infor');
})->name('news.infor');

Route::get('/booking/history', function () {
    return view('booking.history');
}) ->middleware(('auth')) -> name('booking.history');
// Route::get('/review', function(){
//     return view('profile.news.review');
// })->name('news.review');  
Route::get('/news', [ArticleController::class, 'index'])->name('profile.news.news');
Route::get('/booking', function () {
    return view('components.partials.booking');
})->name('components.partials.booking');

require __DIR__.'/auth.php';
