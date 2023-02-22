<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      /* This will seed 20 random records to the users table */
        // \App\Models\User::factory(5)->create();


        // Dummy seed records for user table
        User::create([
          'name' => 'Wendell Bode',
          'email' => 'jaskolski.malvina@example.org',
          'created_at' => '19-02-2023',
          'updated_at' => '19-02-2023'

        ]);
        User::create([
          'name' => 'Miss Adrienne Rogahn',
          'email' => 'arely.pfannerstill@example.net',
          'created_at' => '19-02-2023',
          'updated_at' => '19-02-2023'

        ]);
        User::create([
          'name' => 'Mr. Burley Morissette V',
          'email' => 'cwilkinson@example.com',
          'created_at' => '19-02-2023',
          'updated_at' => '19-02-2023'

        ]);
        User::create([
          'name' => 'Vickie Labadie Jr.',
          'email' => 'kbreitenberg@example.com',
          'created_at' => '19-02-2023',
          'updated_at' => '19-02-2023'

        ]);
        User::create([
          'name' => 'Markus Lesch',
          'email' => 'dare.bryon@example.org',
          'created_at' => '19-02-2023',
          'updated_at' => '19-02-2023'

        ]);
    }
}
