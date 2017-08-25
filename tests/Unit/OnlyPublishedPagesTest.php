<?php

namespace Tests\Unit;

use App\Repositories\Posts;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OnlyPublishedPagesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testOnlyPublishedPagesMethod(Posts $repo)
    {
    	$page = $repo->publishedPages()->first();

        $this->assertTrue(!! ($page->published_at <= \Carbon\Carbon::now()));
    }
}
