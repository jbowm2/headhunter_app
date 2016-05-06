<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        $role = new Role;
        $role->name= 'applicant';
        $role->save();

        $role = new Role;
        $role->name= 'restaurant';
        $role->save();

        $role = new Role;
        $role->name= 'admin';
        $role->save();
    }
}
