<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;


class CommentsController extends Controller
{
   
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['']);
    // }

    public function store(Post $post)
    {
    	$this->validate(request(), ['body' => 'required|Min:2']);

    	$post->addComments(request('body'));
    	// Comment::create([

    	// 	'body' => request('body'),
    	// 	'post_id' => $post->id
    	// ]);

    	return back();
    }
}
