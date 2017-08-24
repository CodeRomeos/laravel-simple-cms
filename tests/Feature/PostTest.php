<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
	use DatabaseMigrations, DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPublishedBlogPostListing()
    {
    	$this->get('/blog')
    		->assertStatus(200)
    		->assertViewIs('web.posts')
    		->assertViewHas('posts');
    }
}
