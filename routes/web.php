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

use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return redirect()->route('login'); // Mengarahkan ke halaman login
});

Auth::routes();

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');

use App\Http\Controllers\TaskController;

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');

Route::resource('tasks', TaskController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
});
