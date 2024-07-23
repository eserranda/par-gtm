<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin',
            'description' => 'login untuk mengakses semua fitur',
        ]);
        // Buat user baru
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'username' => 'super_admin',
            'email' => 'super_admin@localhost.com',
            'password' => Hash::make('password'),
        ]);

        $superAdmin->roles()->attach($superAdminRole);
    }
}
