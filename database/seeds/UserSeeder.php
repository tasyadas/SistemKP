<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "SuperAdmin";
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('secret');
        $user->remember_token = str_random(10);
        $user->save();
        $admin = Role::getRole('super_admin');
        $user->role()->associate($admin)->save();    
    }
}
