<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home(Request $request)
    {
        $search =  $request->search;
        
        $posts =  Post::where('title','LIKE',"%{$search}%")->latest()->paginate(5);
        return view('home',['posts'=>$posts]);
    }

    public function post(Post $post)
    {
        //return "<h1>Ruta blog de {$id}</h1>";
        return view('post',['blog'=>$post]);
    }


}
