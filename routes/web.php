<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DivController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\IquestionController;
use App\Http\Controllers\NavItemController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\OquestionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorController;
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

Route::get('/', [FrontController::class, 'index'])->name('front');
Route::get('/final', [FrontController::class, 'final'])->name('front.final');

Route::resource('index', FrontController::class);

Route::prefix('cms/admin')->middleware(['auth:web', 'verified'])->group(function () {


    Route::get('/', [FrontController::class , 'dashboard'])->name('main');


    Route::resource('users', UserController::class);
    Route::post('users_update/{user}', [UserController::class, 'update'])->name('users_update');

    Route::resource('color', ColorController::class);
    Route::post('colors_update/{color}', [ColorController::class, 'update'])->name('colors_update');

    Route::get('visitors/export',[VisitorController::class,'export'])->name('visitors/export');

    Route::resource('ads', AdController::class);
    Route::post('ads_update/{id}', [AdController::class, 'update'])->name('ads_update');

    Route::resource('texts', TextController::class);
    Route::post('texts_update/{text}', [TextController::class, 'update'])->name('texts_update');

    Route::resource('divs', DivController::class);
    Route::post('divs_update/{div}', [DivController::class, 'update'])->name('divs_update');

    Route::resource('iquestions', IquestionController::class);
    Route::post('iquestions_update/{iquestion}', [IquestionController::class, 'update'])->name('iquestions_update');

    Route::resource('oquestions', OquestionController::class);
    Route::post('oquestions_update/{id}', [OquestionController::class, 'update'])->name('oquestions_update');

    Route::resource('options', OptionController::class);
    Route::get('oquestionsOp/{id}', [OptionController::class, 'indexOqOp'])->name('oquestionsOp');
    Route::post('options_update/{id}', [OptionController::class, 'update'])->name('options_update');

    Route::resource('navitems', NavItemController::class);
    Route::post('navitems_update/{id}', [NavItemController::class, 'update'])->name('navitems_update');

    Route::resource('visitors', VisitorController::class);

    Route::resource('roles', RoleController::class);
    Route::post('roles_update/{id}', [RoleController::class, 'update'])->name('roles_update');

    Route::resource('permissions', PermissionController::class);
    Route::post('permissions_update/{id}', [PermissionController::class, 'update'])->name('permissions_update');

    Route::resource('roles.permissions', RolePermissionController::class);
});

Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('auth.login');
    })->name('dashboard');
});
