<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    function mainPage(){
        return view("pages.welcome",[
            'posts' => Post::all()
        ]);
    }

    function viewPost($id){
        return view("pages.view",[
            "post" => Post::findorFail($id)
        ]);
    }
}
