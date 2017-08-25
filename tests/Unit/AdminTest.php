<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminTest extends TestCase
{
	use DatabaseMigrations, DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAdminRecord()
    {
    	$admin = factory(User::class, 'superadmin')->create();
    	$this->assertDatabaseHas('users', ['id'=>'1','email'=>'admin@admin.com','is_super_admin'=>1,'role_id'=>1]);
    }
}
