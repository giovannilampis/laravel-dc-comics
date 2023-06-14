<?php

use App\Models\Comic;
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

use App\Http\Controllers\ComicController;
 
Route::controller(ComicController::class)->group(function () {
    
    Route::get('/comics', 'index');
    
    Route::post('/comics/store', 'store')->name('comics.store');

    Route::get('/comics/create', 'create');

});