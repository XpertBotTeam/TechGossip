<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\User;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\LoginSystem;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, "mainPage"])->name('home');

Route::get('post/{Post}', [PostController::class, "viewPost"]);

Route::post('login',[LoginSystem::class, "validation"])->middleware('guest');

Route::get('signup',[LoginSystem::class, "viewSignUpPage"])->middleware('guest');

Route::post('signup',[LoginSystem::class, "construction"])->middleware('guest');

Route::get('logout',[LoginSystem::class, "destruct"])->middleware('auth');

Route::get("/dashboard", function(){
    return view('pages.dashboard',[
        'users' => User::all()
    ]);
})->middleware("admin");

Route::get("/test", function (){
    return view('pages.test');
});
Route::get("testSidebar", function (){
    return view('pages.testSidebar');
});
