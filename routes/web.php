<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'MainController')->name('main.index');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', 'IndexController')->name('admin.index');
    Route::group(['namespace' => 'Lesson'], function() {
        Route::get('/lessons', 'IndexController')->name('admin.lesson.index');
        Route::get('/lessons/create', 'CreateController')->name('admin.lesson.create');
        Route::post('/lessons', 'StoreController')->name('admin.lesson.store');
        Route::get('/lessons/{lesson}/edit', 'EditController')->name('admin.lesson.edit');
        Route::patch('/lessons/{lesson}', 'UpdateController')->name('admin.lesson.update');
    });
});

Route::group(['namespace' => 'Lesson'], function() {
    Route::get('/lessons', 'IndexController')->name('lesson.index');
    Route::get('/lessons/{lesson}', 'ShowController')->name('lesson.show');
    
    // Route::delete('/lessons/{lesson}', 'DestroyController')->name('lesson.delete');
});

Route::group(['namespace' => 'Auth'], function() {
    Route::get('/login', 'LoginController')->name('auth.login');
    Route::post('/login', 'LoginController@login')->name('auth.login');
    Route::get('/register', 'RegisterController')->name('auth.register');
    Route::get('/logout', function() {
        Auth::logout();
        return redirect(route('main.index'));
    })->name('auth.logout');
});