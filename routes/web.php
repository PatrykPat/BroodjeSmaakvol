<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return redirect(route('login'));
});
// Route::get('/menu', [MenuController::class, 'index']);
// Route::get('/winkelwagen/{cart}', [CartController::class, 'showMenuItems'])->name('cart');
// Route::post('/cart/delete/{productId}', [CartController::class, 'deleteFromCart'])->name('cart.delete');
// Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
// Route::get('/meldingen', function () {
//     return view('melding');
// });
// Route::get('/coupon', function () {
//     return view('coupons');
// });
Route::get('/menu', [MenuController::class, 'index']);
    Route::get('/winkelwagen', function () {
        $user_id = Auth::id(); // Assuming you're using Laravel's authentication system
        return redirect('/winkelwagen/' . $user_id);
    });
    Route::get('/winkelwagen/{user_id}', [CartController::class, 'showPopulair'])->name('showPopulair');
    Route::get('/winkelwagen/{user_id}', [CartController::class, 'showMenuItems'])->name('cart');
    Route::post('/add-to-cart/{user_id}/{productId}', [CartController::class, 'addToCart'])->name('addToCart');
    Route::delete('/delete-from-cart/{user_id}/{productId}', [CartController::class, 'deleteFromCart'])->name('deleteFromCart');
    Route::get('/meldingen', function () {
    return view('melding');
});

Route::post('/move-data', 'App\Http\Controllers\OrderController@moveData')->name('move.data');


Route::get('/coupon', [CouponController::class, 'index']);

Route::get('/winkelwagen', function () {
    return view('winkelwagen');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
