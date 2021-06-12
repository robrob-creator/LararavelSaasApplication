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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', \App\Http\Controllers\DashboardController::class.'@index')->name('dashboard.index');
Route::get('/team', \App\Http\Controllers\TeamController::class.'@index')->name('team.index'); 
Route::get('/chat', \App\Http\Controllers\ChatController::class.'@index')->name('chat.index'); 
Route::get('/dashboard', \App\Http\Controllers\DashboardController::class.'@index')->name('dashboard.index'); 
Route::get('/chatrooms', \App\Http\Controllers\ChatroomController::class.'@index')->name('chat.conversation'); 
Route::get('/chat', \App\Http\Controllers\ChatroomController::class.'@show')->name('chat.index'); 
Route::get('/chat/all-rooms', \App\Http\Controllers\ChatController::class.'@rooms')->name('chat.rooms'); 
Route::view('/form','chat.index'); 
Route::post('/submit', \App\Http\Controllers\SendController::class.'@save');


