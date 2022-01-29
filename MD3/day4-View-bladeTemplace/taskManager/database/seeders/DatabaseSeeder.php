<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }
}
