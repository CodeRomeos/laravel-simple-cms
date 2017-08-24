<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
	use DatabaseTransactions, DatabaseMigrations;

    public function testPublishedBlogPostListing()
    {
    	$this->get('/blog')
    		->assertStatus(200)
    		->assertViewIs('web.posts')
    		->assertViewHas('posts');
    }
}
