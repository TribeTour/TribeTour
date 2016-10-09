<?php

use Illuminate\Database\Seeder;
use App\Role;
class add_into_role_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role = new Role ();
        $role->name = 'User';
        $role->description = 'I am a normal user';
        $role->save();

        $role = new Role ();
        $role->name = 'Admin';
        $role->description = 'I am a admin';
        $role->save();

        $role = new Role ();
         $role->name = 'Tour Guide';
        $role->description = 'I am a tour guide';
        $role->save();
    }
}
