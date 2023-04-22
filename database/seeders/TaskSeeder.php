<?php

namespace Database\Seeders;

use App\Models\Task;
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
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
