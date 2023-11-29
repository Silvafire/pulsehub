<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;



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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('planostreino', [PageController::class, 'planostreino'])->name('planostreino');
Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('modalidades', [PageController::class, 'modalidades'])->name('modalidades');
Route::get('servicos', [PageController::class, 'servicos'])->name('servicos');
Route::get('eventos', [PageController::class, 'eventos'])->name('eventos');
Route::get('staff', [PageController::class, 'staff'])->name('staff');


Route::get('admin', [PageController::class, 'admindashboard'])->name('admin.dashboard');
Route::get('admin', [PageController::class, 'admindashboard'])->name('admin.dashboard');
Route::resource('admin/users', UserController::class, ['as' => 'admin']);
Route::resource('admin/events', EventController::class, ['as' => 'admin']);
Route::resource('admin/services', ServiceController::class, ['as' => 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');