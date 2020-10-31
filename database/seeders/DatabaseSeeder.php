<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $roleAdmin = Role::create([
            "name" => "admin",
        ]);

        $roleClient = Role::create([
            "name" => "client",
        ]);

        $admin = User::create([
            "name" => "jc",
            "email" => "jc@gmail.com",
            "password" => "jc@gmail.com",
        ]);

        $client = User::create([
            "name" => "toto",
            "email" => "toto@gmail.com",
            "password" => "toto@gmail.com",
        ]);

        $admin->roles()->attach($roleAdmin);
        $client->roles()->attach($roleClient);

    }
}
