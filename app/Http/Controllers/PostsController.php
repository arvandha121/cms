<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
        $function = Post::all();
        return view('home2',['function'=>$function]);
    }
    public function contact(){
        $function = Post::all();
        return view('contact',['function'=>$function]);
    }
    public function team(){
        $function = Post::all();
        return view('team',['function'=>$function]);
    }
    public function preview(){
        $function = Post::all();
        return view('preview',['function'=>$function]);
    }
    
}
