<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    return view('start_page');
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

     Route::post('/login', [LoginController::class, "login"]);

     Route::get('logout', function() {
          Auth::logout();
          return redirect('/');
     })->name('logout');

    Route::get('/register', function(){
        if (Auth::check()) {
            return redirect('/home');
        }

        $field_activity_tags = DB::select('select * from field_activity');
        $skills_tag = DB::select('select * from skills_tag');
        return view('register', ['field_activity_tags' => $field_activity_tags, 'skills_tag' => $skills_tag]);
    })->name('register');

    Route::post('/register', [RegisterController::class, "save"]);
});

Route::get('/test', [TestController::class, "showTags"]);
