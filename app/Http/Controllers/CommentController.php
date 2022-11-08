<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    //
public function store (){
    $post_id = request()->id;
    $this->validate(request(),[
    'body' =>'required',
    ]);
    Comment::create([
    'post_id'=>$post_id,
    'body'=>request('body')
    ]);

     return redirect()->back();
}
}
