<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
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


Route::get('/{id}', [PageController::class, 'index'])->middleware('visitor');
Route::get('/admin/activity', [AdminController::class, 'index']);

Route::get('/', function (){
    return redirect('/1');
});
