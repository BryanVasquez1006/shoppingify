<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowDetails;
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
Route::resource('items', ItemsController::class)->names('items');
Route::resource('main', MainController::class)->names('main');
Route::post('/toggle-hidden-view', 'HiddenViewController@toggleHiddenView')->name('toggleHiddenView');
Route::resource('/history', HistoryController::class)->names("history");


Route::get('/show-details', ShowDetails::class)->name('show-details');

Route::get('/', function () {
    return view('welcome');
});
