<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistributorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('distributors')->insert([
            [
                'contact_person' => 'John Doe',
                'company_name' => 'Global Parts Distributors',
                'adress' => '1234 Parts Lane',
                'postal_code' => '12345',
                'phone_number' => '123-456-7890',
                'email' => 'contact@globalparts.com',
                'country' => 'USA',
                'next_delivery' => now()->addWeeks(2),
            ],
            [
                'contact_person' => 'Jane Smith',
                'company_name' => 'Tech Supplies Inc.',
                'adress' => '4321 Tech Ave',
                'postal_code' => '54321',
                'phone_number' => '098-765-4321',
                'email' => 'info@techsupplies.com',
                'country' => 'Canada',
                'next_delivery' => now()->addWeeks(1),
            ],
            [
                'contact_person' => 'Alex Johnson',
                'company_name' => 'Auto Parts Co.',
                'adress' => '555 Auto Road',
                'postal_code' => '55555',
                'phone_number' => '555-555-5555',
                'email' => 'support@autopartsco.com',
                'country' => 'UK',
                'next_delivery' => now()->addDays(10),
            ],
            [
                'contact_person' => 'Elena Rodriguez',
                'company_name' => 'Eco Friendly Supplies',
                'adress' => '6789 Green Way',
                'postal_code' => '67890',
                'phone_number' => '987-654-3210',
                'email' => 'contact@ecofriendly.com',
                'country' => 'Spain',
                'next_delivery' => now()->addDays(15),
            ],
            [
                'contact_person' => 'Mohammed Al Fayed',
                'company_name' => 'Quick Ship Electronics',
                'adress' => '9876 Fast Lane',
                'postal_code' => '98765',
                'phone_number' => '654-321-9876',
                'email' => 'info@quickshipelectronics.com',
                'country' => 'UAE',
                'next_delivery' => now()->addWeeks(3),
            ],
        ]);
    }
}
