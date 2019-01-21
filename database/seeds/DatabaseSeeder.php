<?php
use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {
            // Call the php artisan migrate:refresh
            $this->command->call('migrate:refresh');
            $this->command->warn("Data cleared, starting from blank database.");
        }

        //create users
        $mainAdmin = User::create([
            'username' => 'Alex',
            'email' => 'someadress@example.com',
            'description' => '',
            'password' => bcrypt('password'),
            'reset_token' => ''
        ]);
        $secondAdmin = User::create([
            'username' => 'Pierre',
            'email' => 'randomadress@example.com',
            'description' => '',
            'password' => bcrypt('password'),
            'reset_token' => ''
        ]);

        $guestOne = User::create([
            'username' => 'Guest',
            'email' => 'randomguest@example.com',
            'description' => '',
            'password' => bcrypt('password'),
            'reset_token' => ''
        ]);
        $this->command->warn("Users created successfully");


        //create a role of admin
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Only one and only admin',
        ]);
        $this->command->warn("Admin role created successfully");

        // create a role of guest
        $guest = Role::create([
            'name' => 'guest',
            'description' => 'test pour vérifier qu\'admin fonctionne'
        ]);
        $this->command->warn("Guest role created successfully");

        //create a permission for role
        $manageUsers = Permission::create([
            'name' => 'manage-users-roles-and-permissions',
            'display_name' => 'Manage Users,Roles and Permissions',
            'description' => 'Can manage users,roles and permission"s',
        ]);
        $this->command->warn("Permission to manage user roles and permissions created successfully");


        //here attaching permission for admin role
        $admin->attachPermission($manageUsers);
        $this->command->warn("User can now manage roles and permissions ! GG");


        //here attaching role for user
        $mainAdmin->attachRole($admin);
        $secondAdmin->attachRole($admin);
        $guestOne->attachRole($guest);
        $this->command->warn("Users correctly promoted to admin and guest");

    }
}