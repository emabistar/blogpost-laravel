<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){

        $posts = Post::all();

        return view('posts.index', ['posts'=>$posts]) ;

    }
    public function details($id){
      $post = Post::find($id);
        if(!$post){
        return back();
        }else{
         return view('posts.details',['post'=>$post]);
        }
    }
    public function create(){

      return view('posts.create');
    }
    public function store(){
    $this->validate(request(),[
    'title'=>'required',
    'body'=>'required'
    ]);
    $post = Post::create([
    'title' =>request('title'),
    'body'=>request('body')
    ]);
     return  redirect('/');
    }
}
