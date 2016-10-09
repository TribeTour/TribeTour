<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class add_into_users_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role_id = Role::where('name', 'User')->first();
        $admin_role_id = Role::where('name', 'Admin')->first();
        $tour_guide_role_id = Role::where('name', 'Tour Guide')->first();

        $user = new User();
        $user->name = 'Alex User';
        $user->email = 'alex@example.com';
        $user->password = bcrypt('Alex123');
        $user->save();
        $user->roles()->attach($user_role_id);

        $user = new User();
        $user->name = 'Donald Guide';
        $user->email = 'donald@example.com';
        $user->password = bcrypt('Donald123');
        $user->save();
        $user->roles()->attach($tour_guide_role_id);

        $user = new User();
        $user->name = 'John Admin';
        $user->email = 'john@example.com';
        $user->password = bcrypt('John123');
        $user->save();
        $user->roles()->attach($admin_role_id);

    }
}
