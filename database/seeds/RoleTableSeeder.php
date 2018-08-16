<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_Admin = new Role();
        $role_Admin->role_name = 'Admin Level 1';
        $role_Admin->description = 'Admin Utama';
        $role_Admin->save();

        $role_Admin2 = new Role();
        $role_Admin2->role_name = 'Admin Level 2';
        $role_Admin2->description = 'Admin Biasa';
        $role_Admin2->save();
        
        $role_SuperAdmin = new Role();
        $role_SuperAdmin->role_name = 'Super Admin';
        $role_SuperAdmin->description = 'Admin Developer';
        $role_SuperAdmin->save();

    }
}
