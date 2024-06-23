<?php  

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RobotsController;
use App\Http\Controllers\Admin\IconoController;
use App\Http\Controllers\MessageController;


$controller_path = 'App\Http\Controllers\Admin';

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('roles', RoleController::class)->middleware('can:admin.roles.index')->names('admin.roles');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

Route::resource('posts', PostController::class)->except('show')->names('admin.posts');

Route::resource('articles', ArticleController::class)->except('show')->names('admin.articles');



Route::get('robots', $controller_path . '\RobotsController@index')->middleware('can:admin.roles.index')->name('admin.robots.index');

Route::post('robots/store', $controller_path . '\RobotsController@store')->middleware('can:admin.roles.index')->name('admin.robots.store');

Route::delete('robots/{id}', $controller_path . '\RobotsController@destroy')->middleware('can:admin.roles.index')->name('admin.robots.destroy');




Route::resource('products', ArticleController::class)->except('show')->names('admin.products');

//articles

Route::resource('articles', ArticleController::class)->names('admin.articles');

Route::get('cambiar-icono', [IconoController::class, 'cambiarIcono'])->middleware('can:admin.roles.index')->name('admin.icono.edit');

Route::post('cambiar-icono', [IconoController::class, 'guardarIcono'])->middleware('can:admin.roles.index')->name('admin.icono.guardar');

