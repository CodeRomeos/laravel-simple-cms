<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AdminLoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'admin@admin.com')
                    ->value('#password', 'admin@123')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/admin');
        });
    }
}
