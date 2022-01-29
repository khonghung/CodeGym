<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;


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
    return view('backend.layout.master');
});

Route::prefix('admin')->group(function () {
    
    Route::get('/index', [AuthorController::class, 'index'])->name('author.index');
    Route::get('/create', [AuthorController::class, 'create'])->name('author.create');
    Route::post('/create', [AuthorController::class, 'store'])->name('author.store');
    Route::get('/{id}/delete', [AuthorController::class, 'destroy'])->name('author.delete');
    Route::get('/{id}/edit', [AuthorController::class, 'edit'])->name('author.edit');
    Route::post('/{id}/edit', [AuthorController::class, 'update'])->name('author.update');

});



