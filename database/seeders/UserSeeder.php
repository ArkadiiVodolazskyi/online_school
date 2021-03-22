<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('permissions')->truncate();
        Schema::enableForeignKeyConstraints();

        $admin_role = Role::create(['name' => 'admin']);

        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'student']);

        Permission::create(['name' => 'use admin panel']);
        Permission::create(['name' => 'view pages']);
        Permission::create(['name' => 'update pages']);
        Permission::create(['name' => 'delete pages']);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'password' => Hash::make('admin')
        ]);

        $user->assignRole($admin_role);
    }
}
