<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('role_name', 'Admin Level 1')->first();
        $role_admin2 = Role::where('role_name', 'Admin Level 2')->first();
        $role_SuperAdmin = Role::where('role_name', 'Super Admin')->first();

        $admin = new User();
        $admin->name = 'Rizky Ayu';
        $admin->email = 'rizky@hse.com';
        $admin->password = bcrypt('hseadminrizky');
        $admin->save();
        $admin->roles()->attach($role_admin);
        
        $admin2 = new User();
        $admin2->name = 'Admin Ridho ';
        $admin2->email = 'ridho@hse.com';
        $admin2->password = bcrypt('hseadminridho');
        $admin2->save();
        $admin2->roles()->attach($role_admin2);

        $SuperAdmin = new User();
        $SuperAdmin->name = 'Alvin Ardiansyah Maulana';
        $SuperAdmin->email = 'alvinardiansyah.18.4@gmail.com';
        $SuperAdmin->password = bcrypt('hsesuperadmingopz');
        $SuperAdmin->save();
        $SuperAdmin->roles()->attach($role_SuperAdmin);
    }
}
