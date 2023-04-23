<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Task;
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
        $this->call([
            //UserSeeder::class,
            //CategorySeeder::class,
            //TaskSeeder::class
        ]);

        User::factory(150)->create();
        Category::factory(1500)->create();
        Task::factory(15000)->create();

        // \App\Models\User::factory(10)->create();
    }
}
