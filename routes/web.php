<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\User;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\LoginSystem;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;

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

Route::get("/upload", function (){
    $categories= Category::all();
    return view('pages.upload',[
        "categories" => $categories
    ]);
});

Route::post("upload", function(){
    $attributes = request()->validate([
        'title' => 'required',
        'thumbnail'=> 'required||image',
        'excerpt' => 'required',
        'body' => 'required',
        'category_id' => 'required',
    ]);
    
    $attributes['user_id'] = auth()->id();
    $attributes['thumbnail']= request()->file('thumbnail')->store('thumbnails');

    Post::create($attributes);
    
   return redirect("/");
});

Route::get("{cat:slug}", function(Category $cat) {

    return view('pages.index',[
        
       'posts' => $cat->post
    
    ]);
});