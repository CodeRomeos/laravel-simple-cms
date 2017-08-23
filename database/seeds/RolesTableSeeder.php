<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'id' => '1',
        	'name' => 'admin',
        	'title' => 'Administrator',
        	'description' => 'Administrator Role'
        ]);

        DB::table('roles')->insert([
        	'id' => '2',
        	'name' => 'agent',
        	'title' => 'Agent',
        	'description' => 'Agent Role'
        ]);

        DB::table('roles')->insert([
        	'id' => '3',
        	'name' => 'customer',
        	'title' => 'Customer',
        	'description' => 'Customer Role'
        ]);
    }
}
