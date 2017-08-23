<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['title', 'slug', 'body', 'image', 'seo'];

	protected $casts = [
		'seo' => 'array'
	];

	public function rules($id = null)
	{
		$rules = ['title' => 'required', 'slug' => 'required|unique:categories'];
		if(!empty($id) && is_numeric($id))
			$rules['slug'] .= ',slug,'.$id;

		return $rules;
	}

	public function posts()
	{
		return $this->belongsToMany('App\Post', 'category_post');
	}

	public function setSlugAttribute($slug)
	{
		$this->attributes['slug'] = str_slug($slug);
	}
}
