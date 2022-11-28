<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index(){
        $posts =  Post::latest()->paginate(5);
        return view('posts.index',['posts'=>$posts]);
    }

    public function create(Post $post){
        return view('posts.create',['post'=>$post]);
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug',
            'body' => 'required'
        ]);


        $post = $request->user()->post()->create([
            'title' => $title =  $request->title,
            //'slug' =>Str::slug($title),
            'slug' =>$request->slug,
            'body' => $request->body
        ]);
        
        $posts =  Post::latest()->paginate(5);
        return view('posts.index',['posts'=>$posts]);
    }

    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }

    public function update(Request $request, Post $post){

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug' . $post->id ,
            'body' => 'required'
        ]);

        $post = $request->user()->post()->create([
            'title' => $title =  $request->title,
            'slug' =>Str::slug($title),
            'body' => $request->body
        ]);
        
        $posts =  Post::latest()->paginate(5);
        return view('posts.index',['posts'=>$posts]);
    }

    public function destroy(Post $post){
        $post->delete();
        return back();
    }
}
