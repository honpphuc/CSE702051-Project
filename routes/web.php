<?php

use App\Http\Controllers\ProfileController;
use App\Models\Booking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\historyBooking;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminFieldController;
use App\Http\Controllers\AdminBookingController;

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
    $history = Booking::where('user_id', auth()->id())->with('san')->latest()->get();
    return view('booking.history', compact('history'));
})->middleware('auth')->name('booking.history');



// Route::get('/review', function(){
//     return view('profile.news.review');
// })->name('news.review');  
Route::get('/news', [ArticleController::class, 'index'])->name('profile.news.news');
Route::get('/booking', [BookingController::class, 'showBookingForm'])->name('components.partials.booking');
Route::post('/booking', [BookingController::class, 'store'])->name('bookings.store');

require __DIR__.'/auth.php';
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::get('/bookings/{booking}', [BookingController::class, 'show'])->name('bookings.show');
Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
Route::put('/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');
Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('users', AdminUserController::class, ['as' => 'admin']);
    Route::resource('fields', AdminFieldController::class, ['as' => 'admin']);
    Route::resource('bookings', AdminBookingController::class, ['as' => 'admin']);
});