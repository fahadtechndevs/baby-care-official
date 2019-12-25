<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
    	$admin->name = 'Super Admin';
    	$admin->email = 'admin@admin.com';
    	$admin->email_verified_at = now();
    	$admin->password = bcrypt('adminadmin');
    	$admin->remember_token = str_random(10);
       	$admin->save();
    }
}
