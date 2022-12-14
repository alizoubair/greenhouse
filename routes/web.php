<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->name('admin.home.index');

Route::get('/admin/farms', [App\Http\Controllers\Admin\AdminFarmController::class, 'index'])->name('admin.farm.index');

Route::get('/admin/farms/create', [App\Http\Controllers\Admin\AdminFarmController::class, 'display'])->name("admin.farm.create");

Route::post('/admin/farms/create', [App\Http\Controllers\Admin\AdminFarmController::class, 'create'])->name("admin.farm.create");

Route::delete('/admin/farms/{id}/delete', [App\Http\Controllers\Admin\AdminFarmController::class, 'delete'])->name("admin.farm.delete");

Route::get('/admin/farms/{id}/edit', [App\Http\Controllers\Admin\AdminFarmController::class, 'edit'])->name("admin.farm.edit");

Route::put('/admin/farms/{id}/update', [App\Http\Controllers\Admin\AdminFarmController::class, 'update'])->name("admin.farm.update");

Route::get('/admin/greenhouses', [App\Http\Controllers\Admin\AdminGreenhouseController::class, 'index'])->name('admin.greenhouse.index');

Route::get('/admin/greenhouses/create', [App\Http\Controllers\Admin\AdminGreenhouseController::class, 'display'])->name("admin.greenhouse.create");

Route::post('/admin/greenhouses/create', [App\Http\Controllers\Admin\AdminGreenhouseController::class, 'create'])->name("admin.greenhouse.create");

Route::delete('/admin/greenhouses/{id}/delete', [App\Http\Controllers\Admin\AdminGreenhouseController::class, 'delete'])->name("admin.greenhouse.delete");

Route::get('/admin/greenhouses/{id}/edit', [App\Http\Controllers\Admin\AdminGreenhouseController::class, 'edit'])->name("admin.greenhouse.edit");

Route::put('/admin/greenhouses/{id}/update', [App\Http\Controllers\Admin\AdminGreenhouseController::class, 'update'])->name("admin.greenhouse.update");

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name("user.index");

Route::get('/user/create', [App\Http\Controllers\UserController::class, 'display'])->name("user.display");

Route::post('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name("user.create");

Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name("user.edit");

Route::get('/user/{id}/update', [App\Http\Controllers\UserController::class, 'update'])->name("user.update");

Route::delete('/user/{id}/delete', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');