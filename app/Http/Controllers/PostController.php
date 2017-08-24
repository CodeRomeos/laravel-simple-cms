<?php

namespace App\Http\Controllers;

use App\Repositories\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
	protected $repo;

	public function __construct(Posts $repo)
	{
		$this->repo = $repo;
	}

    public function index(Request $request)
    {
    	$posts = $this->repo->onlyLatestPublishedPosts()->paginate(20);

    	return view('web.posts', compact('posts'));
    }
}
