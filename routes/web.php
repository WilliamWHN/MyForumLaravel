<?php

<<<<<<< HEAD
namespace App\Http\Controllers;

use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> Dev
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;
<<<<<<< HEAD
use App\Http\Controllers\UserController;
=======
use App\Http\Controllers\TopicController;
>>>>>>> Dev
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

Route::get('/', 'App\Http\Controllers\HomeController@index');

<<<<<<< HEAD
Route::middleware('auth')->group(function () {
    Route::Resource('opinions', OpinionController::class);
    Route::post('opinions/comment/', [OpinionController::class, 'newComment'])->name('opinions.comment');
=======

Route::middleware('auth')->group(function () {
    Route::Resource('opinions', OpinionController::class);
    Route::post('opinions/comment', [OpinionController::class, 'newComment'])->name('opinions.comment');
>>>>>>> Dev
    Route::Resource('references', ReferenceController::class);
    Route::Resource('roles', RoleController::class);
    Route::Resource('states', StateController::class);
    Route::Resource('themes', ThemeController::class);
    Route::Resource('topics', TopicController::class);
<<<<<<< HEAD
    Route::Resource('users', UserController::class);

});

=======
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

>>>>>>> Dev
require __DIR__.'/auth.php';
