<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class TaskController extends Controller
{
    public function index() {

    }

    public function create(Request $r)
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories,
        ];
        return view('tasks.create', $data);
    }

    public function create_action(Request $r)
    {

        $task = $r->only('title', 'category_id', 'description', 'due_date');
        //Gambiarra enquanto não existe user
        $task['user_id'] = 1;

        Task::create($task);
        return redirect(route('home'));
    }

    public function edit(Request $r)
    {
        $id = $r->id;
        $task = Task::find($id);

        if(!$task) {
            return redirect(route('home'));
        }

        $data['task'] = $task;
        $data['categories'] = Category::all();
        return view('tasks.edit', $data);
    }

    public function edit_action(Request $r)
    {
        $request_data = $r->only( 'title', 'due_date', 'category_id', 'description');
        $request_data['is_done'] = $r->is_done ? true : false;

        $task = Task::find($r->id);
        if(!$task) {
            return 'Pagina não encontrada';
        }

        $task->update($request_data);
        $task->save();
        return redirect(route('home'));
    }

    public function delete(Request $r)
    {
        $id = $r->id;
        $task = Task::find($id);

        if($task) {
            $task->delete();
        }

        return redirect(route('home'));
    }
}
