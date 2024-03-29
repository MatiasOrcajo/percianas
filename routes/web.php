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
});

/**
 * CONTACTO
 */
Route::post('enviar-email', [\App\Http\Controllers\ContactoController::class, 'enviarEmail']);

Route::view('/{any}', 'app')
    ->where('any', '.*');



require __DIR__ . '/auth.php';
