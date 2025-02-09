<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\UserTask;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function assign(Request $request)
    {
        UserTask::create([
            'user_id' => $request->user_id,
            'task_id' => $request->task_id
        ]);
        return back();
    }
}
