<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Illuminate\Support\Facades\Date;
use Faker\Provider\DateTime;

class PostsController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        return view('posts.index', [
            'posts'=> $posts
        ]);
    }


    public function create(){
        return view('posts.create');
    }


    public function store(){
        
        $post = new Post();

        $post->title = request('title');
        $post->body = request('body');
        $post->author = request('author');
        $post->date_published = "2019-07-18 20:41:35.597864";

        $post->save();

        return redirect('/posts/');
        
    }
}
