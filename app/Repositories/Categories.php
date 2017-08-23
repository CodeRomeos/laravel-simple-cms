<?php

namespace App\Repositories;

use App\Category;

class Categories extends Repository
{
	public function __construct(Category $model)
	{
		parent::__construct($model);
	}
}