<?php

namespace App\Repositories;

use App\Post;

class Posts extends Repository
{
	public function __construct(Post $model)
	{
		parent::__construct($model);
	}

	public function onlyPosts()
	{
		return $this->model->onlyPosts();
	}

	public function onlyLatestPublishedPosts()
	{
		return $this->latest()->onlyPosts()->published();
	}

	public function onlyPages()
	{
		return $this->model->onlyPages();
	}

	public function onlyPublishedPages()
	{
		return $this->model->published()->onlyPages();
	}

	public function blog()
	{
		return $this->onlyLatestPublishedPosts()->paginate(15);
	}
}