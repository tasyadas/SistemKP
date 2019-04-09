<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'super_admin',
            'admin',
            'siswa'
          ];
  
          foreach ($user as $role) {
              Role::insert([
              'name' => $role,
              'desc' => 'this account made for '.$role,
           ]);
          }
    }
}
