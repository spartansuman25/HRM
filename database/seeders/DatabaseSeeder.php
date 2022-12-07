<?php

namespace Database\Seeders;

use App\User;
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
         User::factory(10)->create();

         User::factory()->create([
             'name' => 'Techmauri',
             'email' => 'techmauri.com',
         ]);
    }
}
