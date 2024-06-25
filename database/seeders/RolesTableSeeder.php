<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Polyfill\Intl\Idn\Idn;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'Admin'],
            ['id' => 2, 'name' => 'Warehouse Worker'],
            ['id' => 3, 'name' => 'Volunteer'],
            ['id' => 4, 'name' => 'Klant'],
        ]);
    }
}
