<?php


use App\Http\Controllers\KelasController;
use App\Http\Controllers\SppController;
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
Route::controller(SppController::class)->group(function(){
    Route::get('/spp', 'index')->name('spp.index');
    Route::get('/spp/create', 'create')->name('spp.create');
    Route::post('/spp', 'store')->name('spp.store');
    Route::get('/spp/{id}', 'show')->name('spp.show');
    Route::get('/spp/{id}/edit', 'edit')->name('spp.edit');
    Route::put('/spp/{id}', 'update')->name('spp.update');
    Route::delete('/spp/{id}', 'destroy')->name('spp.destroy');
});


Route::get('home', function () {
    return view('home.master');
});



Route::get('/coba', function () {
    return view('coba');
});

Route::resource('/kelas', KelasController::class);
