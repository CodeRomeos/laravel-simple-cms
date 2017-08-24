<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewPostsOnBlogPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testBlogPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/blog')
                    ->assertSee('Blog');
        });
    }
}
