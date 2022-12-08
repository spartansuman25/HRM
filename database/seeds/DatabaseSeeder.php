<?php

use Database\Seeders\EmployeeSeeder;
use Database\Seeders\RolesSeeder;
use Database\Seeders\UserRolesSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UserRolesSeeder::class);
    }
}
