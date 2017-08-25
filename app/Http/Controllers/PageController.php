<?php

namespace App\Http\Controllers;

use App\Repositories\Posts;
use Illuminate\Http\Request;

class PageController extends Controller
{
	protected $repo;

	public function __construct(Posts $repo)
	{
		$this->repo = $repo;
	}

    public function welcome()
    {
    	return view('web.homepage');
    }

    public function adminIndex($type=null)
    {

    	return view('admin.pages');
    }
}
