<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'title' => 'Minha task de exemplo',
            'description' => 'Essa task é apenas um exemplo',
            'due_date' => '2023-04-23 00:00:00',
            'user_id' => User::all()->random(),
            'category_id' => Category::all()->random()
        ]);
    }
}
