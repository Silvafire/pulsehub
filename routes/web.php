<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TipoPostController;
use App\Http\Controllers\PostUsersController;
use App\Http\Controllers\PlanosController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TiposPlanosController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\Tipo_evento_modController;
use App\Http\Controllers\ModalidadesController;




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
Route::get('post', [PageController::class, 'post'])->name('post');
Route::get('servicosshow/{service}', [PageController::class, 'servicosshow'])->name('servicosshow');
Route::get('eventshow/{event}', [PageController::class, 'eventshow'])->name('eventshow');
Route::get('planosdetails/{tipoplano}', [PageController::class, 'planosdetails'])->name('planosdetails');
Route::get('modalidadeshow/{modalidades}', [PageController::class, 'modalidadeshow'])->name('modalidadeshow');

/* Route::group(['middleware' => ['auth', 'verified'] , 'as' => 'admin.','prefix' => 'admin'], function () {
 Route::get('/', [PageController::class, 'admindashboard'])->name('dashboard');
 Route::get('/users/{user}/send_reactivate_mail', [UserController::class, 'send_reactivate_email']) ->name('users.sendActivationEmail');
}); */

Auth::routes(['verify' => true]);
Route::resource('/admin/users', UserController::class, ['as' => 'admin', 'middleware' => ['auth', 'verified']])->only(['edit', 'update']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'verified', 'admin'] , 'as' => 'admin.', 'prefix' => 'admin'], function () {

    Route::get('/', [PageController::class, 'admindashboard'])->name('dashboard');
    Route::get('/users/{user}/send_reactivate_mail', [UserController::class, 'send_reactivate_email'])->name('users.sendActivationEmail');
    Route::delete('/users/{user}/destroy_photo',[UserController::class, 'destroy_photo'])->name('users.destroyPhoto');
    Route::resource('users', UserController::class)->except(['edit', 'update']);
    Route::resource('events', EventController::class);
    Route::resource('modalidades', ModalidadesController::class);
    Route::resource('planos', PlanosController::class);
    Route::resource('post', PostController::class);
    Route::resource('staffs', StaffController::class);
    Route::resource('tiposplanos', TiposPlanosController::class);
    Route::resource('tipopost', TipoPostController::class);
    Route::resource('postusers', PostUsersController::class);
    Route::resource('tipo_eventos_mod', Tipo_evento_modController::class);
    Route::resource('services', ServiceController::class);
    Route::get('services/{service}/images', [ServiceController::class, 'images_index'])->name('services.images.index');
    Route::get('services/{service}/images/create', [ServiceController::class, 'images_create'])->name('services.images.create');
    Route::post('services/{service}/images', [ServiceController::class, 'images_store'])->name('services.images.store');
    Route::get('services/{service}/images/{imageService}/edit', [ServiceController::class, 'images_edit'])->name('services.images.edit');
    Route::put('services/{service}/images/{imageService}', [ServiceController::class, 'images_update'])->name('services.images.update');
    Route::delete('services/{service}/images/{imageService}', [ServiceController::class, 'images_destroy'])->name('services.images.destroy');

});
