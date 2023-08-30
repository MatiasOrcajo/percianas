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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth'])->name('dashboard');

    /**
     * BLINDS ROUTES
     */
    Route::get('blinds', [\App\Http\Controllers\BlindsController::class, 'index'])->name('blinds.index');
    Route::post('store-blind', [\App\Http\Controllers\BlindsController::class, 'store'])->name('store.blind');
    Route::put('edit-blind/{blind}', [\App\Http\Controllers\BlindsController::class, 'edit'])->name('edit.blind');
    Route::delete('delete-blind/{blind}', [\App\Http\Controllers\BlindsController::class, 'delete'])->name('delete.blind');
    Route::get('blind/{blind}', [\App\Http\Controllers\BlindsController::class, 'show'])->name('show.blind');

    /**
     *
     */
});

Route::view('/{any}', 'app')
    ->where('any', '.*');



require __DIR__ . '/auth.php';
