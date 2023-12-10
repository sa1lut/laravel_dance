<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Lesson;

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

Route::get('/', [MainController::class, 'index'])->name('main.index');

Route::group(['namespace' => 'Lesson'], function() {
    Route::get('/lessons', 'IndexController')->name('lesson.index');
    Route::get('/lessons/create', 'CreateController')->name('lesson.create');
    Route::post('/lessons', 'StoreController')->name('lesson.store');
    Route::get('/lessons/{lesson}', 'ShowController')->name('lesson.show');
    Route::get('/lessons/{lesson}/edit', 'EditController')->name('lesson.edit');
    Route::patch('/lessons/{lesson}', 'UpdateController')->name('lesson.update');
    Route::delete('/lessons/{lesson}', 'DestroyController')->name('lesson.delete');
});

