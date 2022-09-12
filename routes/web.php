<?php

use Illuminate\Support\Facades\Route;

//CRUD для записок
Route::group(['namespace'=>'Note','prefix'=>'notes'], function (){
    Route::get('/', 'IndexController')->name('note.index');
    Route::get('/create', 'CreateController')->name('note.create');
    Route::post('/', 'StoreController')->name('note.store');
    Route::get('/{note}', 'ShowController')->name('note.show');
    Route::get('/{note}/edit', 'EditController')->name('note.edit');
    Route::patch('/{note}', 'UpdateController')->name('note.update');
    Route::delete('/{note}', 'DeleteController')->name('note.delete');
});

//CRUD для сообщений
Route::group(['namespace'=>'Message','prefix'=>'messages'], function (){
    Route::get('/', 'IndexController')->name('message.index');
    Route::get('/create', 'CreateController')->name('message.create');
    Route::post('/', 'StoreController')->name('message.store');
    Route::get('/{message}', 'ShowController')->name('message.show');
    Route::get('/{message}/edit', 'EditController')->name('message.edit');
    Route::patch('/{message}', 'UpdateController')->name('message.update');
    Route::delete('/{message}', 'DeleteController')->name('message.delete');
});


Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'auth'])->name('auth');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register_attempt'])->name('register_attempt');

//Вход в кабинет пользователя
Route::get('/cabinet', [App\Http\Controllers\CabinetController::class,'show'])->name('cabinet');

//Поиск записок
Route::post('/search', [App\Http\Controllers\SearchController::class,'search'])->name('search');
