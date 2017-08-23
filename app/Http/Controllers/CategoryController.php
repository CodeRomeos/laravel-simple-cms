<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Categories;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function __construct(Categories $categories)
    {
    	$this->categories = $categories;
    }

    public function create(CreateCategoryRequest $request)
    {
    	$category = $this->categories->create($request->only('title', 'slug', 'body', 'seo'));

    	$request->session()->flash('message_success', 'Category created successfully!');
    	return redirect(route('admin.categories.edit', $category->id));
    }

    public function edit($id)
    {
    	$category = $this->categories->findOrFail($id);

    	return view('admin.categories.single', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
    	$category = $this->categories->findOrFail($id);
    	$category->fill($request->only('title', 'slug', 'body', 'seo'))->save();

    	$request->session()->flash('message_success', 'Category updated successfully!');
    	return redirect(route('admin.categories.edit', $category->id));
    }

    public function adminIndex($type = null)
    {
    	if(! $type)
    	{
    		$categories = $this->categories->latest()->paginate(50);

    		return view('admin.categories.index', compact('categories'));
    	}

    	if($type === 'create')
    	{
    		return view('admin.categories.single');
    	}

    	return abort(404);
    }
}
