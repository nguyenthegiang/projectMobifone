<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\BaoCaoController;
use App\Http\Controllers\Port1090DocumentaryController;
use App\Http\Controllers\Port1090HomeController;
use App\Http\Controllers\Port1090NewsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Mới vào thì sẽ vào HomePage
Route::get('/', function() {
    return view('Home');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/quanLy', [MainController::class, 'showQuanLy']);

Route::get('/hienThi', [MainController::class, 'showTraCuu']);

Route::resource('/baoCao', BaoCaoController::class);

/* --Port1090News-- */
Route::resource('/port1090news', Port1090NewsController::class);

Route::resource('/port1090home', Port1090HomeController::class);

Route::resource('/port1090documentary', Port1090DocumentaryController::class);