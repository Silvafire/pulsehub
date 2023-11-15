<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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