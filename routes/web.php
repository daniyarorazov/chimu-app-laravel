<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/register', function() {
//    return view('register');
//});

Route::name('user.')->group(function(){
    Route::view('/home', 'index')->middleware('auth')->name('home');

    Route::get('/login', function(){
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('login');
    })->name('login');

    // Route::post('/login', [])

    // Route::get('logout', [])->name('logout');

    Route::get('/register', function(){
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('register');
    })->name('register');

    Route::post('/register', [RegisterController::class, "save"]);
});