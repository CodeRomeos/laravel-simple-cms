<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

	use SoftDeletes;

    protected $fillable = ['title', 'body', 'slug', 'image', 'seo', 'type', 'published_at'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category', 'category_post');
    }

    public function setSlugAttribute($slug)
    {
    	$this->attributes['slug'] = str_slug($slug);
    }

    public function scopeOfType($q, $type)
    {
    	return $q->whereType($type);
    }

    public function scopeOnlyPosts($q)
    {
    	return $q->ofType('post');
    }

    public function scopeOnlyPages($q)
    {
    	return $q->ofType('page');
    }

    public function getIsPageAttribute()
    {
    	return !! ($this->type == 'page');
    }

    public function getIsPostAttribute()
    {
    	return !! ($this->type == 'post');
    }

    public function getIsPublishedAttribute()
    {
    	return !! ($this->published_at);
    }
}
