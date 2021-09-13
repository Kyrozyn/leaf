<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin_roles = Role::create(['name' =>'Administrator']);
        $default_user = new User();
        $default_user->id = 1;
        $default_user->name = "Kyro";
        $default_user->email = "arr@e.email";
        $default_user->password = Hash::make('password');
        $default_user->assignRole($admin_roles);
        $default_user->save();
    }
}
