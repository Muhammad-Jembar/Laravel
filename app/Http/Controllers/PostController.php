<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
    public function index() 

    {

        $tittle = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $tittle = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $tittle = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $tittle,
             "active" => "posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()      
             ]);
    }

    public function show( Post $post)

    {
     
        return view('post', [
            "title" => "single post",
            "active" => "posts",
            "post" => $post
            ]);

    }
}
