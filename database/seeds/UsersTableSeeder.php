<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'id' => '1',
        	'role_id' => '1',
        	'name' => 'Admin',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('admin@123'),
        	'is_approved' => true,
        	'verification_code'	=> sha1(time() . str_random(10)),
        	'verified_at' => \Carbon\Carbon::now(),
        	'is_super_admin' => true
        ]);

        DB::table('users')->insert([
        	'role_id' => '2',
        	'name' => 'Agent',
        	'email' => 'agent@agent.com',
        	'password' => bcrypt('agent@123'),
        	'is_approved' => true,
        	'verification_code'	=> sha1(time() . str_random(10)),
        	'verified_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
        	'role_id' => '3',
        	'name' => 'Customer',
        	'email' => 'customer@customer.com',
        	'password' => bcrypt('customer@123'),
        	'is_approved' => true,
        	'verification_code'	=> sha1(time() . str_random(10)),
        	'verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
