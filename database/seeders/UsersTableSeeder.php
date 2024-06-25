<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Admin',
            'adress' => '123 Admin Street',
            'postal_code' => '1234AB',
            'phone_number' => '06-12457836',
            'email' => 'admin@example.com',
            'role_id' => 1,
            'password' => Hash::make('password'),
            'remember_token' => \Illuminate\Support\Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
                'name' => 'John Doe',
                'address' => '456 Main Road',
                'postal_code' => '5678CD',
                'phone_number' => '06-98765432',
                'email' => 'john.doe@example.com',
                'role_id' => 2,
                'password' => Hash::make('password123'),
                'remember_token' => \Illuminate\Support\Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'address' => '789 Side Street',
                'postal_code' => '4321EF',
                'phone_number' => '06-13579246',
                'email' => 'jane.smith@example.com',
                'role_id' => 3,
                'password' => Hash::make('password456'),
                'remember_token' => \Illuminate\Support\Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alice Johnson',
                'address' => '101 First Avenue',
                'postal_code' => '8765GH',
                'phone_number' => '06-24681357',
                'email' => 'alice.johnson@example.com',
                'role_id' => 2,
                'password' => Hash::make('password789'),
                'remember_token' => \Illuminate\Support\Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Brown',
                'address' => '202 Second Street',
                'postal_code' => '3456IJ',
                'phone_number' => '06-57924681',
                'email' => 'bob.brown@example.com',
                'role_id' => 4,
                'password' => Hash::make('password012'),
                'remember_token' => \Illuminate\Support\Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
