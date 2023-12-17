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
Route::get('/contact', 'MainController@contact')->name('contact.index');
Route::get('/about', 'MainController@about')->name('about.index');

Route::group(['namespace' => 'Client'], function() {
    Route::get('/my_id={client}', 'IndexController')->name('client.index');
    Route::get('/my_id={client}/edit', 'EditController')->name('client.edit');
    Route::patch('my_id={client}/update', 'UpdateController')->name('client.update');
    Route::get('/my_id={client}/subscription', 'SubscriptionController')->name('clients.subscription');
    Route::get('/buySubscription/lesson_id={lesson}/subscription_id={subscription}', 'CreateBuyController')->name('create.buy');
    Route::post('/buySubscription/{subscription}', 'StoreBuyController')->name('store.buy');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', 'IndexController')->name('admin.index');
    Route::group(['namespace' => 'Lesson'], function() {
        Route::get('/lessons', 'IndexController')->name('admin.lesson.index');
        Route::get('/lessons/create', 'CreateController')->name('admin.lesson.create');
        Route::post('/lessons', 'StoreController')->name('admin.lesson.store');
        Route::get('/lessons/{lesson}/edit', 'EditController')->name('admin.lesson.edit');
        Route::patch('/lessons/{lesson}', 'UpdateController')->name('admin.lesson.update');
    });
    Route::group(['namespace' => 'Teacher'], function() {
        Route::get('/teachers', 'IndexController')->name('admin.teacher.index');
        Route::get('/teachers/create', 'CreateController')->name('admin.teacher.create');
        Route::post('/teachers', 'StoreController')->name('admin.teacher.store');
        Route::get('/teachers/{teacher}/edit', 'EditController')->name('admin.teacher.edit');
        Route::patch('/teachers/{teacher}', 'UpdateController')->name('admin.teacher.update');
    });
    Route::group(['namespace' => 'Client'], function() {
        Route::get('/clients', 'IndexController')->name('admin.client.index');
        Route::get('/clients/create', 'CreateController')->name('admin.client.create');
        Route::post('/clients', 'StoreController')->name('admin.client.store');
        Route::get('/clients/{client}/edit', 'EditController')->name('admin.client.edit');
        Route::patch('/clients/{client}', 'UpdateController')->name('admin.client.update');
    });
    Route::group(['namespace' => 'Subscription'], function() {
        Route::get('/subscriptions', 'IndexController')->name('admin.subscription.index');
        Route::get('/subscriptions/create', 'CreateController')->name('admin.subscription.create');
        Route::post('/subscriptions', 'StoreController')->name('admin.subscription.store');
        Route::get('/subscriptions/{subscription}/edit', 'EditController')->name('admin.subscription.edit');
        Route::patch('/subscriptions/{subscription}', 'UpdateController')->name('admin.subscription.update');
    });
    Route::group(['namespace' => 'ClientSubscription'], function() {
        Route::get('/clientSubscription', 'IndexController')->name('admin.clientsubscription.index');
        Route::get('/clientSubscription/{clientSubscription}/edit', 'EditController')->name('admin.clientsubscription.edit');
        Route::patch('/clientSubscription/{clientSubscription}', 'UpdateController')->name('admin.clientsubscription.update');
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
    Route::post('/register', 'RegisterController@register')->name('auth.register');
    Route::get('/logout', function() {
        Auth::logout();
        return redirect(route('main.index'));
    })->name('auth.logout');
});