<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Https\Controller\UserController;

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
    return view('customehomepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function()
{
    Route::get('/profile', [SiteController::class, 'create']);

Route::resource('/roles',RoleController::class);
Route::resource('/permissions', PermissionController::class);
});

 Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'role:admin'])->name('admin.index');

/*Route::get('/crud',function()
{
return view('crud');}
)->middleware(['auth','verified'])->name('crud');
*/
/*
Route::get('/alldata',function()
{
return view('alldata');}
)->middleware(['auth','verified'])->name('alldata');
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [SiteController::class, 'edit'])->name('profile.edit2');
    Route::patch('/profile', [SiteController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [SiteController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/crud',[SiteController::class,'read'])->name('crud');
Route::get('/alldata',[SiteController::class,'alldata'])->middleware(['auth','role:admin']);
Route::resource('/create', App\Http\Controllers\UserController::class);
require __DIR__.'/auth.php';
