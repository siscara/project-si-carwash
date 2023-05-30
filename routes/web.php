<?php

use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\OrderController as ClientOrderController;
use App\Http\Controllers\ProfileController;
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

Route::get('/admin', function () {
    return view('auth.loginAdmin');
});

Route::post('/admin', function () {
    $email = request('email');
    $password = request('password');

    // Logika validasi dan autentikasi sederhana
    if ($email === 'sisca@admin.com' && $password === 'sisca123') {
        // Jika login berhasil, arahkan ke halaman selanjutnya
        return redirect('/dashboard');
    } else {
        // Jika login gagal, arahkan kembali ke halaman login dengan pesan error
        return redirect('/')->with('error', 'Login failed.');
    }

});

Route::get('/laporan', [LaporanController::class, 'laporan'])->name('laporan');


Route::get('/tabelLayanan', [LayananController::class, 'tableLayanan'])->name('tabelLayanan');
Route::post('/postlayanan', [LayananController::class, 'post'])->name('post');
Route::post('/tabelLayanan/{id}', [LayananController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [LayananController::class, 'delete'])->name('delete');


Route::get('/tabelUser', [UserController::class, 'tableUser'])->name('tabelUser');
Route::post('/tabelUser/{id}', [UserController::class, 'edit'])->name('edit');
Route::get('/delete-data/{id}', [UserController::class, 'delete'])->name('delete');

Route::get('/dashboard', [OrderController::class, 'tableOrder'])->name('dashboard');
Route::post('/dashboard', [OrderController::class, 'post'])->name('post');
Route::post('/dashboard/{id}', [OrderController::class, 'edit'])->name('edit');
Route::get('/dashboard/{id}', [OrderController::class, 'delete'])->name('delete');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete');
    
    Route::get('/layanan', [ClientOrderController::class, 'layanan'])->name('layananpage');
    Route::post('/post', [ClientOrderController::class, 'post'])->name('post');
});

require __DIR__ . '/auth.php';

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
