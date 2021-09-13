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
    return redirect('/login');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/post',[\App\Http\Controllers\Post::class,'index']);
});

Route::get('/login',[\App\Http\Controllers\Account::class,'loginForm']);
Route::get('/signup',[\App\Http\Controllers\Account::class,'signUpForm']);

//require __DIR__.'/auth.php';
