<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function postList(){
	    $posts = Post::orderBy('created_at', 'DESC')->paginate(1);
	    //$posts = $posts->toArray();
		return view('posts.list', ['items' => $posts]);
    }

	public function postDetail($id){
		$post = Post::find($id);

		return view('posts.detail', ['item' => $post]);
	}
}
