<?php

	namespace App\Http\Controllers;

	use App\Models\Post;
	use Illuminate\Http\Request;
	use App\User;
	use App\Models\UserPost;
	use Auth;
	use App\Http\Requests;

	class PostController extends Controller
	{
		public function postList()
		{
			$posts = Post::orderBy('created_at', 'DESC')->paginate(1);
			//$posts = $posts->toArray();
			return view('posts.list', [ 'items' => $posts ]);
		}

		public function postDetail($id)
		{
			$post = Post::find($id);

			return view('posts.detail', [ 'item' => $post ]);
		}

		/**
		 * @param $id - post id
		 */
		public function plus($id)
		{
			$post = Post::find($id);
			$user_id = Auth::user()->id;
			$count = UserPost::whereRaw('user_id = ? and post_id = ?',
				[ $user_id, $id ])->count();

			if($count == 0){
				$post->rating += 1;
				UserPost::create(['user_id' => $user_id, 'post_id' => $id]);
				$post->save();
			}
			return $post->rating;
		}


		/**
		 * @param $id - post id
		 */
		public function minus($id)
		{

		}
	}
