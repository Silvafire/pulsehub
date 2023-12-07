<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TipoPostController;
use App\Http\Controllers\PostUsersController;
use App\Http\Controllers\PlanosController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ModalidadesController;
use App\Http\Controllers\TiposPlanosController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ImageServiceController;



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
Route::resource('admin/users', UserController::class, ['as' => 'admin']);
Route::resource('admin/events', EventController::class, ['as' => 'admin']);
Route::resource('admin/modalidades', ModalidadesController::class, ['as' => 'admin']);
Route::resource('admin/planos', PlanosController::class, ['as' => 'admin']);
Route::resource('admin/tiposplanos', TiposPlanosController::class, ['as' => 'admin']);
Route::resource('admin/post', PostController::class, ['as' => 'admin']);
Route::resource('admin/tipopost', TipoPostController::class, ['as' => 'admin']);
Route::resource('admin/postusers', PostUsersController::class, ['as' => 'admin']);
Route::resource('admin/staffs', StaffController::class, ['as' => 'admin']);

Route::resource('admin/services', ServiceController::class, ['as' => 'admin']);

Route::get('admin/services/{service}/images', [ServiceController::class, 'images_index'])->name('admin.services.images.index');
Route::get('admin/services/{service}/images/create', [ServiceController::class, 'images_create'])->name('admin.services.images.create');
Route::post('admin/services/{service}/images', [ServiceController::class, 'images_store'])->name('admin.services.images.store');
Route::get('admin/services/{service}/images/{imageService}/edit', [ServiceController::class, 'images_edit'])->name('admin.services.images.edit');
Route::put('admin/services/{service}/images/{imageService}', [ServiceController::class, 'images_update'])->name('admin.services.images.update');
Route::delete('admin/services/{service}/images/{imageService}', [ServiceController::class, 'images_destroy'])->name('admin.services.images.destroy');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
