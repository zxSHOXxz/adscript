<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DivController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\IquestionController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\OquestionController;
use App\Http\Controllers\TextController;
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

// Route::get('/', function () {
//     return view('front.index');
// });
Route::resource('index', FrontController::class);

Route::prefix('cms/admin')->group(function () {
    Route::view('/', 'cms.index')->name('dashboard');

    Route::resource('color', ColorController::class);
    Route::post('colors_update/{color}', [ColorController::class, 'update'])->name('colors_update');

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
    Route::post('options_update/{id}', [OptionController::class, 'update'])->name('options_update');

    Route::resource('visitors', VisitorController::class);
});
